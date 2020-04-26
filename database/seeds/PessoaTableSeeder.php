<?php

use Illuminate\Database\Seeder;
use App\Models\Person;

/**
 * 
 * @author Juan Soares
 */
class PessoaTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(Person::class, 100)->create();
    }
}
