<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;

class SendNewsletter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $user;

    /**
     * Create a new job instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Trying to send Welcome
        try {
            $msg = 'Welcome to Software Builders Ltd. Your acount has been created.';
            $link= route('home');
            $maildata = ['name' => $this->user->name, 'text' => $msg , 'link' => $link ];
            $sendmail = Mail::to($this->user->email)->send(new WelcomeMail($maildata));
        } catch (\Throwable $th) {
            //throw $th;
        }


        $subscribers = Subscriber::where('status',1)->get('email','id');

        foreach ($subscribers as $subscriber) {
            try{
             $sendmail =    Mail::to($subscriber->email)->send(new NewsletterMail($newsletter));
             if ($sendmail) {
                $newsletter->status = 2;
                $newsletter->update();
             }
            }catch (\Exception $exception){

            }
        }

    }
}
