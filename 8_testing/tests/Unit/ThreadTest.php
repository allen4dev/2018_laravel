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
        // Given
        $thread = factory(Thread::class)->create();
        // When
        $thread->addReply([
            'body' => 'Foo',
            'user_id' => 1,
        ]);
        // Then
        $this->assertCount(1, $thread->replies);
    }
}
