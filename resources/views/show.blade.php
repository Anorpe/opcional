@extends('layouts.app')


@section('content')



<div class="card-header">{{ __('Vehiculos') }}</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Placa</th>
        <th scope="col">Marca</th>
        <th scope="col">Descripcion</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>


        @forelse ($vehiculos as $vehiculo)
            <tr>

        <td>@if($vehiculo->marca == 'Toyota')<b style="color:#FA3A11";>{{$vehiculo->placa}}</b>@else{{$vehiculo->placa}}@endif</td>
        <td>{{$vehiculo->marca}}</td>
        <td>@if($vehiculo->marca == 'Mazda') Los de Mazda son los mejores @endif</td>

            </tr>
        @empty
            <div class="post-content">
                <div class="post-container">
                    <div class="post-detail">
                        <h5>No hay vehiculos </h5>
                        <div class="line-divider"></div>
                        <div class="post-text">
                            <p>

                            </p>
                        </div>
                        <div class="line-divider"></div>

                    </div>
                </div>
            </div>
        @endforelse


    <tr>



    </tbody>
</table>



@endsection






