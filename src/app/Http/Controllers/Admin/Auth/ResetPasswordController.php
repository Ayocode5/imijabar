<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Hash};

class ResetPasswordController extends Controller
{
    public function index()
    {
        $reset_token = $this->resetToken($current_url = url()->current());
        
        if($reset_token) { 
            $expected_url = url('admin/reset-password/'.$reset_token->token.'/'.$reset_token->email);
        }

        if($expected_url != $current_url) {
            return redirect()->route('admin.login');
        }

        return view('admin.auth.reset_password');
    }

    public function update(Request $request)
    {
        $reset_token = $this->resetToken(url()->previous());

        $request->validate([
            'new_password' => 'required',
            'retype_password' => 'required|same:new_password',
        ]);

        if($reset_token) {
            // Update Password
            User::where('email', $reset_token->email)->update([
                'password' => Hash::make($request->new_password),
            ]);
            // Remove Reset Token
            DB::table('password_resets')->where('token', $reset_token->token)->delete();

        } else {
            return redirect()->route('admin.login')->withErrors("Invalid Reset Token");
        }
       
        return redirect()->route('admin.login')->with('success', 'Password is reset successfully!');
    }

    private function resetToken($url) {
        $url_split = explode('/', $url);
        return DB::table('password_resets')
            ->where('email', $url_split[6])
            ->where('token', $url_split[5])
            ->first() ?? null;
    }
}
