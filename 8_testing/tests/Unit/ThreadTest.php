<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Thread;
use App\User;

class ThreadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_creator()
    {
        $thread = factory(Thread::class)->create();

        $this->assertInstanceOf(User::class, $thread->user);
    }

    /** @test */
    public function it_has_replies()
    {
        $thread = factory(Thread::class)->create();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }

    /** @test */
    public function it_can_add_a_reply()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);


        $thread = factory(Thread::class)->create();

        $thread->addReply([
            'body' => 'Foo',
            'user_id' => auth()->id(),
        ]);

        $this->assertCount(1, $thread->replies);
    }
}
