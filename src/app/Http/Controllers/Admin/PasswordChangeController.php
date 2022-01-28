<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordChangeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $admin_data = User::where('id', auth()->user()->id)->first();
        return view('admin.auth.password_change', compact('admin_data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required',
            're_password' => 'required|same:password',
        ]);

        $data['password'] = Hash::make($request->password);
        User::where('id',auth()->user()->id)->update($data);

        return redirect()->back()->with('success', 'Password is updated successfully!');

    }

}
