<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\sendEmailToAllActiveSubscriberJob;
use App\Models\Admin\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $subscriber = Subscriber::where('subs_active', 1)->get();
        return view('admin.subscriber.index', compact('subscriber'));
    }

    public function destroy($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        return Redirect()->back()->with('success', 'Subscriber is deleted successfully!');
    }

    public function send_email()
    {
        return view('admin.subscriber.send_email');
    }

    public function send_email_action(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);

        $subject = $request->subject;
        $message = $request->message;

        $subscribers = Subscriber::where('subs_active', 1)->get();
        foreach($subscribers as $subscriber)
        {
            sendEmailToAllActiveSubscriberJob::dispatch([
                'recipent' => $subscriber->subs_email,
                'subject' => $subject,
                'message' => $message
            ]);
        }

        return redirect()->back()->with('success', 'Email is sent successfully to all subscribers!');
    }
}
