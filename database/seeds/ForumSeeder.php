<?php

use Illuminate\Database\Seeder;
use App\Models\Forum;

/**
 * 
 * @author Juan Soares
 */
class ForumSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(Forum::class, 50)->create();
    }
}
