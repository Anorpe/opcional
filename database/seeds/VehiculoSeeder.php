<?php

use App\Vehiculo;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Vehiculo::create([
            'placa'=>'EK54',
            'marca'=>'Mazda',
            'dueno_cedula'=>1216


        ]);
        Vehiculo::create([
            'placa'=>'SM08',
            'marca'=>'Toyota',
            'dueno_cedula'=>503


        ]);
    }
}
