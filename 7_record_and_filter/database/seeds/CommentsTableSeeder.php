<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(App\Post::class, 5)->create();

        $posts->each(function ($post) {
            factory(App\Comment::class, 10)->create([
                'post_id' => $post->id,
            ]);
        });
    }
}
