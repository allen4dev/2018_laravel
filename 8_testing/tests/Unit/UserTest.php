<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Thread;

class UserTest extends TestCase
{
    /** @test */
    public function it_can_retrieve_his_threads()
    {
        $user = factory(User::class)->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $user->threads);
    }

    /** @test */

    public function it_can_create_a_thread()
    {
        $this->actingAs(factory(User::class)->create([
            'name' => 'John Doe',
        ]));

        $thread = [
            'title' => 'Test title',
            'body' => 'Test body',
        ];

        auth()->user()->createThread($thread);

        $this->assertEquals(Thread::first()->title, $thread['title']);
        $this->assertEquals(Thread::first()->body, $thread['body']);
    }
}
