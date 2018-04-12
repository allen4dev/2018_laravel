<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Reply;
use App\Thread;

class ReplyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_creator()
    {
        $user = factory(User::class)->create();
        $reply = factory(Reply::class)->create([
            'user_id' => $user->id,
        ]);

        $this->assertInstanceOf(User::class, $reply->user);
    }

    /** @test */
    public function it_belongs_to_a_thread()
    {
        $thread = factory(Thread::class)->create();
        $reply = factory(Reply::class)->create([
            'thread_id' => $thread->id,
        ]);

        $this->assertInstanceOf(Thread::class, $reply->thread);
    }
}
