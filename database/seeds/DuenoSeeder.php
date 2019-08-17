<?php

use App\Dueno;
use Illuminate\Database\Seeder;

class DuenoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dueno::create([
            'cedula'=>1216,
            'nombre'=>'Andres'
        ]);
        Dueno::create([
            'cedula'=>503,
            'nombre'=>'Gabriel'
        ]);
    }
}
