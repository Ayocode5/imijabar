<?php

namespace App\Jobs;

use App\Mail\EoRegistrationSuccessNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEoRegistrationSuccessNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $recipent, $message, $subject;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        ['recipent' => $this->recipent, 'subject' => $this->subject, 'message' => $this->message] = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->recipent)->send(new EoRegistrationSuccessNotification($this->subject, $this->message));
    }
}
