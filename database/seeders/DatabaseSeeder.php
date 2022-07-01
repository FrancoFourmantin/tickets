<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(config('app.env') === 'local')
            $this->call([
                UserSeeder::class,
                EstadosTicketsSeeder::class,
                SeveridadesTicketsSeeder::class,
                ProyectosClientesSeeder::class
            ]);
        elseif(config('app.env') === 'production')
            $this->call([
                UserSeeder::class,
                EstadosTicketsSeeder::class,
                SeveridadesTicketsSeeder::class
            ]);
    }
}
