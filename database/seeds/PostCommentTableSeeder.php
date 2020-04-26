<?php

use Illuminate\Database\Seeder;
use App\Models\PostComment;

class PostCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostComment::class, 500)->create();
    }
}
