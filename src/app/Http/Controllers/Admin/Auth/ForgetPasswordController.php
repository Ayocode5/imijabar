<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailAdminResetLinkJob;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ForgetPasswordController extends Controller
{
    public function index()
    {
    	return view('admin.auth.forget_password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $check_email = User::where('email', $request->email)->first();

        if(!$check_email) {
        	return redirect()->back()->with('error', 'Email address not found');

        } else {
            $email_template_data = DB::table('email_templates')->where('id', 5)->first();
            $subject = $email_template_data->et_subject;
            $message = $email_template_data->et_content;

            $token = hash('sha256', time());
            $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
            $message = str_replace('[[reset_link]]', $reset_link, $message);

            DB::table('password_resets')->insert([
                'email' => $request->input('email'),
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            SendEmailAdminResetLinkJob::dispatch([$request->email, $subject, $message]);

            return redirect()->back()->with('success', "Email Reset Password has been sent");
        }

    }

}
