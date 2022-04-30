<?php

namespace App\Http\Controllers\Admin\Organizations;

use App\Http\Controllers\Controller;
use App\Models\Admin\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Ramsey\Uuid\Uuid;

class CommitteeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $this->authorize('viewAny', TeamMember::class);

        $team_member = TeamMember::all();
        return view('admin.organizations.committee.index', compact('team_member'));
    }

    public function create()
    {
        $this->authorize('create', TeamMember::class);

        return view('admin.organizations.committee.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', TeamMember::class);

        $team_member = new TeamMember();
        $data = $request->only($team_member->getFillable());

        $request->validate([
            'name' => 'required',
            'slug' => 'unique:team_members',
            'designation' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $fileName = 'team-member-'.Uuid::uuid4().'.'.$request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move(public_path('uploads/'), $fileName);

        $data['photo'] = $fileName;
        $data['slug'] = Str::slug($request->name);

        $team_member->fill($data)->save();
        return redirect()->route('admin.organizations.committee.index')->with('success', 'Committee is added successfully!');
    }

    public function edit($id)
    {
        $this->authorize('update', TeamMember::class);

        $team_member = TeamMember::findOrFail($id);
        return view('admin.organizations.committee.edit', compact('team_member'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', TeamMember::class);

        $request->validate([
            'name'   =>  'required',
            'slug'   =>  [Rule::unique('team_members')->ignore($id),],
            'designation'   =>  'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $fileName = '';

        $team_member = TeamMember::findOrFail($id);
        $data = $request->only($team_member->getFillable());

        if($request->hasFile('photo')) {

            if(!empty($team_member->photo) && file_exists(public_path('uploads/'.$team_member->photo))) {

                unlink(public_path('uploads/' . $team_member->photo));

                // preg_match('/(team-member-)(.*).(jpg|png|jpeg|gif)/', $team_member->photo, $team_member_photo_format_name_split);

                // $fileName = $team_member_photo_format_name_split[1].
                //     $team_member_photo_format_name_split[2].
                //     '.'.$request->file('photo')->getClientOriginalExtension();
                $fileName = 'team-member-'.Uuid::uuid4().'.'.$request->file('photo')->getClientOriginalExtension();

            } else {

                $fileName = 'team-member-'.Uuid::uuid4().'.'.$request->file('photo')->getClientOriginalExtension();
            }

            $request->file('photo')->move(public_path('uploads/'), $fileName);
            $data['photo'] = $fileName;

        }

        $team_member->fill($data)->save();
        
        return redirect()->route('admin.organizations.committee.index')->with('success', 'Committee is updated successfully!');
    }

    public function destroy($id)
    {
        $this->authorize('delete', TeamMember::class);

        $team_member = TeamMember::findOrFail($id);
        if(!($team_member->photo == '') && file_exists(public_path('uploads/'.$team_member->photo))) {
            unlink(public_path('uploads/'.$team_member->photo));
        }
        $team_member->delete();
        return Redirect()->back()->with('success', 'Committee is deleted successfully!');
    }
}
