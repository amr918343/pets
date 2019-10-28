<?php

use App\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::truncate();
        factory(Video::class, 10)->create();
    }
}
