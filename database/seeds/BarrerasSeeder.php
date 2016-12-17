<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Barrera;
use \Carbon\Carbon;

class BarrerasSeeder extends Seeder {
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        $barrera = Barrera::create([
            'name' => 'Consejería de Educación',
            'description' => 'Este edificio cuenta con un escalón a la entrada que impide que las personas con movilidad reducida accedan con facilidad al mismo.',
            'address' => 'Calle Gran Vía, 2',
            'zip' => 28013,
            'city' => 'Madrid',
            'latitude' => '40.4185983',
            'longitude' => '-3.6973379',
            'user_id' => 1,
            'type' => 'edificacion'
        ]);

        $barrera = Barrera::create([
            'name' => 'Calle Alcalá, 44',
            'description' => 'Estrechamiento severo de calzada',
            'address' => 'Calle Alcalá, 44',
            'zip' => 28014,
            'city' => 'Madrid',
            'latitude' => '40.4180541',
            'longitude' => '-3.7003447',
            'user_id' => 1,
            'type' => 'transporte'
        ]);

        $barrera = Barrera::create([
            'name' => 'Metro Sevilla',
            'description' => 'Esta estación no cuenta con ascensores ni con suelo de relieve.',
            'address' => 'Calle Alcalá, 23',
            'zip' => 28014,
            'city' => 'Madrid',
            'latitude' => '40.418636',
            'longitude' => '-3.696252',
            'user_id' => 1,
            'type' => 'urbanistica'
        ]);

        $barrera = Barrera::create([
            'name' => 'Acceso a Sol por Alcalá',
            'description' => 'Por obras de remodelación de edificio colindante, la calle Alcalá tiene levantado el suelo y existen obstáculos como planchas de metal o escalones',
            'address' => 'Calle Alcalá, 5-7',
            'zip' => 28014,
            'city' => 'Madrid',
            'latitude' => '40.417308',
            'longitude' => '-3.701412',
            'user_id' => 1,
            'type' => 'urbanistica',
            'temporary' => true
        ]);
    }
}