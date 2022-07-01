<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Proyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectosClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory()
            ->count(5)
            ->has(Proyecto::factory()->count(random_int(1 , 3)))
            ->create();
    }
}
