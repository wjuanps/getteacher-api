<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FieldTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(EnderecoTableSeeder::class);
        $this->call(PessoaTableSeeder::class);
        $this->call(ProfessorTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(RatingTableSeeder::class);
        $this->call(FormacaoTableSeeder::class);
        $this->call(AulaTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(PostCommentTableSeeder::class);
        $this->call(PostLikeTableSeeder::class);
        $this->call(PostDeslikeTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(ForumSeeder::class);
        $this->call(ForumAnswerSeeder::class);
    }
}
