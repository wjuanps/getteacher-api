<?php

use Illuminate\Database\Seeder;
use App\Models\Field;

/**
 * 
 * @author Juan Soares
 */
class FieldTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Field::create([
            'field' => 'Idiomas',
            'slug' => 'idiomas'
        ]);
        Field::create([
            'field' => 'Exatas',
            'slug' => 'exatas'
        ]);
        Field::create([
            'field' => 'Humanas',
            'slug' => 'humanas'
        ]);
        Field::create([
            'field' => 'Artes',
            'slug' => 'artes'
        ]);
        Field::create([
            'field' => 'Música',
            'slug' => 'musica'
        ]);
        Field::create([
            'field' => 'Linguagens',
            'slug' => 'linguagens'
        ]);
        Field::create([
            'field' => 'Biológicas',
            'slug' => 'biologicas'
        ]);
        Field::create([
            'field' => 'Meio Ambiente',
            'slug' => 'meio-ambiente'
        ]);
    }
}
