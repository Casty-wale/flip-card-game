<?php

namespace App\Jobs;

use App\Action\SmsSender;
use App\Mail\SendCodeMail;
use App\Models\ValidationCode;
use App\Services\CodeService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class CustomerCodeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $muser= $this->user;
        $vCode = (new CodeService())->verifyCode($muser);

        if(Mail::to($muser->email)->send(new SendCodeMail($vCode, $muser))){
            $mailResponds = "Email sent.";
            ValidationCode::where('code', $vCode)
                ->update(['mailResponds'=>$mailResponds]);
        }else{
            $mailResponds = "Email failed.";
            ValidationCode::where('code', $vCode)
                ->update(['mailResponds'=>$mailResponds]);

            $smsResponds = (new SmsSender())->sendingSms($vCode, $muser);
    
            ValidationCode::where('code', $vCode)
                    ->update(['smsResponds'=>$smsResponds]);
        };
        

        // $user->notify(new CodeNotification());
        // CustomerCodeJob::dispatch($user);
        // $user->notify(new CodeNotification());
    }
}
