<?php

use Illuminate\Database\Seeder;
use App\Models\ForumAnswer;

/**
 * 
 * @author Juan Soares
 */
class ForumAnswerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(ForumAnswer::class, 200)->create();
    }
}
