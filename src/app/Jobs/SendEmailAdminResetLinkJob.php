<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMessageToAdmin;

class SendEmailAdminResetLinkJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $recipent, $message, $subject;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $details)
    {
        [$this->recipent, $this->subject, $this->message] = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->recipent)->send(new ResetPasswordMessageToAdmin($this->subject,$this->message));
    }
}
