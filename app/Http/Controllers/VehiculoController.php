<?php

namespace App\Http\Controllers;

use App\Dueno;
use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    public function login(String $codigo){
        $verificacion = "A765";
        if(strcmp ($codigo , $verificacion ) == 0){
            return view('paginaprincipal');

        }
        else{
            return view('error');
        }


    }

    public function create(){
        return view('create');

    }
    public function store(){
        $data = request();

        Dueno::create(['cedula'=>$data['cedula'],
            'nombre'=>$data['nombre']]);
        Vehiculo::create(['placa'=>$data['placa'],
            'marca'=>$data['marca'],
            'dueno_cedula'=>$data['cedula']]);

        return view('paginaprincipal');

    }
    public function show(){
        $vehiculos = Vehiculo::all();

        return view('show',compact('vehiculos'));

    }
    public function shows(){
        $estadisticas = DB::table('vehiculo')
            ->select('marca',DB::raw('COUNT(marca) as conteo'))
            ->groupBy('marca')
            ->get();
        return view('shows',compact('estadisticas'));
    }
}
