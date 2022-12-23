<?php

namespace Database\Seeders;

use App\Models\peliculas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        peliculas::create([
            'name'=>'kansas',
            'director'=>'lean pin pin',
            'date'=>'10-10-2012',  
        ]);
        peliculas::create([
            'name'=>'mi newpel',
            'director'=>'jjajaja',
            'date'=>'30-09-2017',  
        ]);
        peliculas::create([
            'name'=>'mascotas',
            'director'=>'uinamed',
            'date'=>'03-01-2020',  
        ]);
        peliculas::factory(4)->create();
        //
    }
}
