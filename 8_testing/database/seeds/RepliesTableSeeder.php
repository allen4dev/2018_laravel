<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 5)->create();

        $threads = $users->each(function ($user) {
            factory(App\Thread::class)->create([
                'user_id' => $user->id,
            ]);
        });


        $threads->each(function ($thread) {
            factory(App\Reply::class, 10)->create([
                'thread_id' => $thread->id,
            ]);
        });
    }
}
