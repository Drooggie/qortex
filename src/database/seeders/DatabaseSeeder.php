<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Artist::factory(1)->create();
        Album::factory(1)->create()->each(function ($album) {

            $songs = Song::factory(5)->create();

            foreach ($songs as $index => $song) {
                $album->songs()->attach($song->id, ['track_number' => $index + 1]);
            }
        });
    }
}
