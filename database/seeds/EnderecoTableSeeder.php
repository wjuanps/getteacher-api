<?php

use Illuminate\Database\Seeder;
use App\Models\Address;
use App\User;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(Address::class, 100)->create();
    }
}
