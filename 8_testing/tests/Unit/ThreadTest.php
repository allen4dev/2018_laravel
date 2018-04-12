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
}
