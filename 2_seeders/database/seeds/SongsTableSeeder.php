<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = factory(App\Artist::class, 10)
            ->create()
            ->pluck('id');

        $categories = factory(App\Category::class, 5)
            ->create()
            ->pluck('id')
            ->toArray();

        foreach($artists as $artist) {
            factory(App\Song::class, 10)->create([
                'category_id' => $categories[array_rand($categories)],
                'artist_id' => $artist
            ]);
        }
    }
}
