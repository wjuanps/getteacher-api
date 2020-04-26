<?php

use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rating::class, 100)->create();
    }
}
