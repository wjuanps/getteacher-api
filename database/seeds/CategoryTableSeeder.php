<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

/**
 * 
 * @author Juan Soares
 */
class CategoryTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Category::create([
            'field_id' => 1,
            'category' => 'Inglês',
            'slug' => 'ingles'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Francês',
            'slug' => 'frances'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Alemão',
            'slug' => 'alemao'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Mandarin',
            'slug' => 'mandarin'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Japonês',
            'slug' => 'japones'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Chinês',
            'slug' => 'chines'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Libras',
            'slug' => 'libras'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Italiano',
            'slug' => 'italiano'
        ]);
        Category::create([
            'field_id' => 1,
            'category' => 'Português para estrangeiro',
            'slug' => 'portugues-para-estrangeiro'
        ]);

        Category::create([
            'field_id' => 2,
            'category' => 'Matemática',
            'slug' => 'matematica'
        ]);
        Category::create([
            'field_id' => 2,
            'category' => 'Computação',
            'slug' => 'computacao'
        ]);
        Category::create([
            'field_id' => 2,
            'category' => 'Física',
            'slug' => 'fisica'
        ]);
        Category::create([
            'field_id' => 2,
            'category' => 'Química',
            'slug' => 'quimica'
        ]);
        Category::create([
            'field_id' => 2,
            'category' => 'Cálculo',
            'slug' => 'calculo'
        ]);
        Category::create([
            'field_id' => 2,
            'category' => 'Estatística',
            'slug' => 'estatistica'
        ]);
        Category::create([
            'field_id' => 2,
            'category' => 'Engenharia',
            'slug' => 'engenharia'
        ]);
        Category::create([
            'field_id' => 2,
            'category' => 'Matemática Financeira',
            'slug' => 'matematica-financeira'
        ]);
        
        Category::create([
            'field_id' => 3,
            'category' => 'Ciências Siciais',
            'slug' => 'ciencias-sociais'
        ]);
        Category::create([
            'field_id' => 3,
            'category' => 'Geografia',
            'slug' => 'geografia'
        ]);
        Category::create([
            'field_id' => 3,
            'category' => 'História',
            'slug' => 'historia'
        ]);
        Category::create([
            'field_id' => 3,
            'category' => 'Filosofia',
            'slug' => 'filosofia'
        ]);
        Category::create([
            'field_id' => 3,
            'category' => 'Sociologia',
            'slug' => 'sociologia'
        ]);
        Category::create([
            'field_id' => 3,
            'category' => 'Psicologia',
            'slug' => 'psicologia'
        ]);
        Category::create([
            'field_id' => 3,
            'category' => 'Direito',
            'slug' => 'direito'
        ]);
        
        Category::create([
            'field_id' => 4,
            'category' => 'Arte Digital',
            'slug' => 'arte-digital'
        ]);
        Category::create([
            'field_id' => 4,
            'category' => 'Dança',
            'slug' => 'dança'
        ]);
        Category::create([
            'field_id' => 4,
            'category' => 'Pintura',
            'slug' => 'pintura'
        ]);
        Category::create([
            'field_id' => 4,
            'category' => 'Desenho',
            'slug' => 'desenho'
        ]);
        Category::create([
            'field_id' => 4,
            'category' => 'Fotografia',
            'slug' => 'fotografia'
        ]);
        Category::create([
            'field_id' => 4,
            'category' => 'Teatro',
            'slug' => 'teatro'
        ]);
        Category::create([
            'field_id' => 4,
            'category' => 'Esportes',
            'slug' => 'esportes'
        ]);
        Category::create([
            'field_id' => 4,
            'category' => 'Culinária',
            'slug' => 'culinaria'
        ]);

        Category::create([
            'field_id' => 5,
            'category' => 'Aula de Canto',
            'slug' => 'aula-de-canto'
        ]);
        Category::create([
            'field_id' => 5,
            'category' => 'Instrumentos',
            'slug' => 'instrumentos'
        ]);
        Category::create([
            'field_id' => 5,
            'category' => 'Música Clássica',
            'slug' => 'musica-classica'
        ]);
        Category::create([
            'field_id' => 5,
            'category' => 'Música[Outros]',
            'slug' => 'musica-outros'
        ]);

        Category::create([
            'field_id' => 6,
            'category' => 'Português',
            'slug' => 'portugues'
        ]);
        Category::create([
            'field_id' => 6,
            'category' => 'Redação',
            'slug' => 'redacao'
        ]);
        Category::create([
            'field_id' => 6,
            'category' => 'Gramática',
            'slug' => 'gramatica'
        ]);
        Category::create([
            'field_id' => 6,
            'category' => 'Literatura',
            'slug' => 'literatura'
        ]);
        Category::create([
            'field_id' => 6,
            'category' => 'Pedagogia',
            'slug' => 'pedagogia'
        ]);
        Category::create([
            'field_id' => 6,
            'category' => 'Liguagens[Outros]',
            'slug' => 'liguagens-outros'
        ]);

        Category::create([
            'field_id' => 7,
            'category' => 'Nutrição',
            'slug' => 'nutricao'
        ]);
        Category::create([
            'field_id' => 7,
            'category' => 'Terapia Ocupacional',
            'slug' => 'terapia-ocupacional'
        ]);
        Category::create([
            'field_id' => 7,
            'category' => 'Biologia',
            'slug' => 'biologia'
        ]);
        Category::create([
            'field_id' => 7,
            'category' => 'Zootecnia',
            'slug' => 'zootecnia'
        ]);
        Category::create([
            'field_id' => 7,
            'category' => 'Fonoaudiologia',
            'slug' => 'fonoaudiologia'
        ]);
        Category::create([
            'field_id' => 7,
            'category' => 'Educação Física',
            'slug' => 'educacao-fisica'
        ]);

        Category::create([
            'field_id' => 8,
            'category' => 'Desenvolvimento e Sustentabilidade',
            'slug' => 'desenvolvimento-e-sustentabilidade'
        ]);
        Category::create([
            'field_id' => 8,
            'category' => 'Direito e Legislação Ambiental',
            'slug' => 'direito-e-legislacao-ambiental'
        ]);
        Category::create([
            'field_id' => 8,
            'category' => 'Economia de Recursos Naturais',
            'slug' => 'Economia-de-recursos-naturais'
        ]);
        Category::create([
            'field_id' => 8,
            'category' => 'Educação Ambiental',
            'slug' => 'educacao-ambiental'
        ]);
        Category::create([
            'field_id' => 8,
            'category' => 'Saúde e Meio Ambiente',
            'slug' => 'saude-e-meio-ambiente'
        ]);
        Category::create([
            'field_id' => 8,
            'category' => 'Outros',
            'slug' => 'outros'
        ]);

    }
}
