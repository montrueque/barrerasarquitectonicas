<?php

use \Illuminate\Database\Seeder
use \Illuminate\Support\Facades\DB
use \App\Evento
use \Carbon\Carbon

class EventosSeeder extends Seeder {
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        $evento = Evento::create([
            'title' => 'Meeting de Barreras Arquitectónicas',
            'description' => 'En esta reunión se abordará el tema de las barreras arquitectónicas desde el punto de vista de expertos de diversa índole.',
            'user_id' => 1,
            'header_image' => 'http://disenosocial.org/wp-content/uploads/2012/08/disenoparatodos.jpg',
            'start_date' => Carbon::create(2017, 1, 2, 15, 30, 0, 'Europe/Madrid'),
            'end_date' => Carbon::create(2017, 1, 2, 17, 0, 0, 'Europe/Madrid')
        ]);

        $evento = Evento::create([
            'title' => 'Accesibilidad e Igualdad',
            'description' => 'Congreso internacional sobre los beneficios en la sociedad de la eliminación de barreras arquitectónicas.',
            'user_id' => 1,
            'header_image' => 'http://noticiasdecamargo.es/wp-content/uploads/2012/05/Concurso-Once.jpg',
            'start_date' => Carbon::create(2017, 1, 8, 9, 30, 0, 'Europe/Madrid'),
            'end_date' => Carbon::create(2017, 1, 10, 17, 30, 0, 'Europe/Madrid')
        ])
    }
}