<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Teacher::class, 50)->create();
    }
}
