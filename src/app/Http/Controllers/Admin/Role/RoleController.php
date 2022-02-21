<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\{DB, Hash};
use Ramsey\Uuid\Uuid;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
        // $this->authorize('isAdmin');
    }

    public function user()
    {
        $admin_users = User::with(['roles' => function ($q) {
            return $q->select('name');
        }])->role(['admin', 'editor'])->get();

        $roles = DB::table('roles')->select('name')->get()->pluck('name');

        // dd($admin_users);
        return view('admin.role.user', compact('admin_users', 'roles'));
    }

    public function user_create()
    {
        $roles = Role::all();
        return view('admin.role.user_create', compact('roles'));
    }

    public function user_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required',
            're_password' => 'required|same:password',
        ]);

        $fileName = 'user-' . Uuid::uuid4() . '.' . $request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move(public_path('uploads/'), $fileName);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $fileName,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->role_id);

        return redirect()->route('admin.role.user')->with('success', 'Admin User is added successfully!');
    }


    public function user_edit($id)
    {
        $roles = Role::all();
        $admin_user = User::with(['roles' => function($q) {
            $q->select(['name', 'id']);
        }])->findOrFail($id);
        return view('admin.role.user_edit', compact('admin_user', 'roles'));
    }

    public function user_update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $fileName = null;
    
        $request->validate([
            'name' => 'required',
            'email' => [Rule::unique('users')->ignore($id)],
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('photo')) {
        
            unlink(public_path('uploads/' . $user->photo));

            //Separates photo name format
            preg_match('/(user-)(.*).(jpg|png|jpeg|gif)/', $user->photo, $user_photo_split);
            $fileName = $user_photo_split[1] . $user_photo_split[2] . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('uploads/'), $fileName);

        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $fileName ?? $user->photo
        ]);

        return redirect()->route('admin.role.user')->with('success', 'Admin User is updated successfully!');
    }

    public function user_edit_password($id)
    {
        $admin_user = User::findOrFail($id);
        return view('admin.role.user_edit_password', compact('admin_user'));
    }

    public function user_update_password(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
            're_password' => 'required|same:password',
        ]);

        $data['password'] = Hash::make($request->password);
        User::where('id', $id)->update($data);

        return redirect()->route('admin.role.user')->with('success', 'Admin User Password is updated successfully!');
    }

    public function user_destroy($id)
    {
        $user = User::findOrFail($id);
        $user->syncRoles([]);
        //unlink(public_path('uploads/' . $user->photo));
        $user->delete();
        return Redirect()->back()->with('success', 'Admin User is deleted successfully!');
    }

    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', Rule::unique('roles')]
        ]);

        Role::create(['name' => $request->input('name')]);
        return redirect()->route('admin.role.index')->with('success', 'Role is added successfully!');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.role.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name'   =>  [
                'required',
                Rule::unique('roles')->ignore($id),
            ]
        ]);

        $role->name = $request->input('name');
        $role->save();
        return redirect()->route('admin.role.index')->with('success', 'Role is updated successfully!');
    }

    public function access_setup($id)
    {
        $permissions = DB::table('permissions')->get();
        $attachedPermissionsRole = Role::with(['permissions' => fn ($q) => $q->select('id')])->find($id);

        return view('admin.role.access_setup', compact('permissions', 'attachedPermissionsRole'));
    }


    public function access_setup_update(Request $request, $id)
    {

        $role = Role::with('permissions')->find($id);
        $role->syncPermissions($request->input('input'));

        return redirect()->route('admin.role.index')->with('success', 'Access Setup is updated successfully!');
    }

    public function destroy($id)
    {
        $role = Role::select('id')->withCount('users')->find($id);

        if ($role->users_count > 0) {
            return Redirect()->back()->with('error', 'You can not delete this role, there are user under this role.');
        } else {
            //Delete the roles and permissions
            $role = Role::find($id);
            $role->syncPermissions([]);
            $role->delete();

            return Redirect()->back()->with('success', 'Role is deleted successfully!');
        }
    }
}
