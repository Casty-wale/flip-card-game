<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CustomerDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $validData;
    public $promo_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($validData, $promo_id)
    {
        $this->validData = $validData;
        $this->promo_id = $promo_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        $user = User::create([
            'name' => $this->validData['fullName'],
            'email' => $this->validData['email'],
            'phoneNumber' => $this->validData['phoneNumber'],
            'deviceType' => 'phone'.$this->validData['phoneNumber'],
            'promo_id' => $this->promo_id,
        ]);

        // $user->notify(new CodeNotification());
        CustomerCodeJob::dispatch($user);
        // $user->notify(new CodeNotification());

    }
}
