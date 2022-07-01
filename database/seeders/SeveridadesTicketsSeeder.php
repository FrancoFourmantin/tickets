<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeveridadesTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('severidades_tickets')->insert([
            [
                'nombre' => 'baja',
                'color' => '#FFEDD5'
            ],
            [
                'nombre' => 'media',
                'color' => '#FDE047'
            ],
            [
                'nombre' => 'alta',
                'color' => '#EF4444'
            ],
            [
                'nombre' => 'urgente',
                'color' => '#701A75'
            ],
        ]);
    }
}
