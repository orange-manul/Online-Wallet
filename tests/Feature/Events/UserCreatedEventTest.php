<?php

namespace Tests\Feature\Events;

use App\Events\UserCreated;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Event;

class UserCreatedEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testUserCreatedEvent()
    {
        $user = User::factory()->create();

        Event::fake(\App\Events\UserCreated::class);

        event(new UserCreated($user));

        Event::assertDispatched(\App\Events\UserCreated::class);
    }
}
