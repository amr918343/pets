<?php

use App\Pet;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::truncate();
        factory(Pet::class, 50)->create();
    }
}
