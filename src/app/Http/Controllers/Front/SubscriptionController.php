<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailVerificationSubscriber;
use App\Models\Admin\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $token = hash('sha256', time());

        $request->validate([
            'subs_email' => 'required|email|unique:subscribers',
            'captcha' => 'required'
        ]);

        $secret = app()['config']['google']['config']['g_recaptcha_secret_key'];
        $captcha_validation = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $request->input('captcha')), true);

        if (!$captcha_validation['success']) {
            return response()->json([
                'message' => $captcha_validation
            ], 422);
        }

        // Save data into database
        $data['subs_email'] = $request->subs_email;
        $data['subs_token'] = $token;
        $data['subs_active'] = 0;
        DB::table('subscribers')->insert($data);

        // Send Email
        $email_template_data = DB::table('email_templates')->where('id', 3)->first();
        $subject = $email_template_data->et_subject;
        $message = $email_template_data->et_content;

        $verification_link = url('subscriber/verify/' . $token . '/' . $request->subs_email);

        $message = str_replace('[[verification_link]]', $verification_link, $message);

        // Send Email Verification to subscriber  
        SendEmailVerificationSubscriber::dispatch([
            'recipent' => $request->subs_email,
            'subject' => $subject,
            'message' => $message
        ]);

        return response()->json([
            'message' => 'Terimas kasih sudah berlangganan berita, silahkan verifikasi email anda'
        ], 200);
    }

    public function verify()
    {
        $settings = DB::table('general_settings')->select(
			'logo',
			'top_bar_email',
			'top_bar_phone',
            'top_bar_organization_name',
			'footer_address',
			'footer_email',
			'footer_phone',
			'footer_copyright',
			'footer_column1_heading',
			'footer_column2_heading',
			'footer_column3_heading',
		)->first();

        $email_from_url = request()->segment(count(request()->segments()));
        $aa = DB::table('subscribers')->where('subs_email', $email_from_url)->first();

        if (!$aa) {
            return abort(404);
        }

        $expected_url = url('subscriber/verify/' . $aa->subs_token . '/' . $aa->subs_email);
        $current_url = url()->current();
        if ($expected_url != $current_url) {
            return abort(404);
        }

        $data['subs_active'] = 1;
        $data['subs_token'] = '';
        Subscriber::where('subs_email', $email_from_url)->update($data);

        return view('pages.email_verified', compact('settings'));
    }
}
