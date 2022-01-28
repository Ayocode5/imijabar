<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileChangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $this->authorize('isAdmin');
        $admin_data = User::where('id', auth()->user()->id)->first();
        return view('admin.auth.profile_change', compact('admin_data'));
    }

    public function update(Request $request)
    {
        $this->authorize('isAdmin');
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;

        User::where('id', auth()->user()->id)->update($data);

        return redirect()->back()->with('success', 'Profile Information is updated successfully!');

    }

}
