<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash};

class ResetPasswordController extends Controller
{
    public function index()
    {
        $aa = DB::table('admins')->where('id', 1)->first();
        $expected_url = url('admin/reset-password/'.$aa->token.'/'.$aa->email);
        $current_url = url()->current();
        if($expected_url != $current_url) {
            return redirect()->route('admin.login');
        }
        return view('admin.auth.reset_password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'new_password' => 'required',
            'retype_password' => 'required|same:new_password',
        ]);

        $data['password'] = Hash::make($request->new_password);
        $data['token'] = '';
        User::where('id',1)->update($data);

        return redirect()->route('admin.login')->with('success', 'Password is reset successfully!');
    }
}
