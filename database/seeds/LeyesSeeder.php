<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Ley;
use \Carbon\Carbon;

class LeyesSeeder extends Seeder {
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        $ley = Ley::create([
            'title' => 'RD 556/1989, de 19 de Mayo',
            'description' => 'Este Real Decreto arbitra medidas mínimas sobre accesibilidad en los edificios.',
            'user_id' => 1,
            'download_url' => 'http://miliarium.com/Paginas/Leyes/urbanismo/estatal/RD556-89.asp'
        ]);

        $ley = Ley::create([
            'title' => 'Ley 13/1982, de 7 de abril',
            'description' => 'Esta Ley reua la Integración Social de las personas con discapacidad.',
            'user_id' => 1,
            'download_url' => 'http://miliarium.com/Paginas/Leyes/urbanismo/estatal/L13_82.asp'
        ]);
    }
}