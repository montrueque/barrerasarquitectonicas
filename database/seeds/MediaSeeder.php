<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Media;

class LeyesSeeder extends Seeder {
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        //Testimonios
        $media = Media::create([
            'title' => 'Barreras Arquitectónicas - Programa España Directo - TVE1 - Junio2011',
            'description' => 'Programa "España Directo" de TVE1 habla de las barreras arquitectónicas que se encuentran en las ciudades las personas con movilidad reducida.',
            'resource_url' => 'https://www.youtube.com/watch?v=CtcIfkFwipM',
            'thumbnail_url' => 'https://img.youtube.com/vi/CtcIfkFwipM/2.jpg',
            'user_id' => 1,
            'type' => 'testimonio'
        ]);

        $media = Media::create([
            'title' => 'BARRERAS ARQUITECTONICAS DISCAPACITADOS ',
            'description' => '',
            'resource_url' => 'https://www.youtube.com/watch?v=112Uu7RHEXk',
            'thumbnail_url' => 'https://img.youtube.com/vi/112Uu7RHEXk/2.jpg',
            'user_id' => 1,
            'type' => 'testmonio'
        ]);

        $media = Media::create([
            'title' => 'Critica comica a las Barreras Arquitectónicas ',
            'description' => 'En este vídeo he querido mostrar algunas situaciones que aun que en el vídeo son ficticias pueden ocurrir en la realidad y no debería ser así. Se agradece que deis like, compartáis, si tenéis alguna critica y/o sugerencia serán bienvenidas.',
            'resource_url' => 'https://www.youtube.com/watch?v=PD3c5nXnOkU',
            'thumbnail_url' => 'https://img.youtube.com/vi/PD3c5nXnOkU/2.jpg',
            'user_id' => 1,
            'type' => 'testimonio'
        ]);

        //Barreras
        /*$media = Media::create([
            'title' => '',
            'description' => '',
            'resource_url' => '',
            'thumbnail_url' => '',
            'user_id' => 1,
            'type' => 'barrera'
        ]);*/
    }
}