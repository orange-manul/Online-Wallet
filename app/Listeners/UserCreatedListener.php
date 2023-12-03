<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedListener implements ShouldQueue
{
    /**
     * @param UserCreated $event
     * @return void
     */
    public function handle(UserCreated $event): void
    {
         $user = $event->user;

        if(!$user->balance){
            $balance = $user->balance()->create(['amount' => 0.0000]);
        }


        // $balance = $user->balance()->create(['amount' => 0.00]);

        // \Illuminate\Support\Facades\Log::info('Balance created for user ID: ' . $user->id . ', Balance ID: ' . $balance->id);


    }
}
