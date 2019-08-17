@extends('layouts.app')


@section('content')



    <div class="card-header">{{ __('Vehiculos') }}</div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Marca</th>
            <th scope="col">Conteo</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>


        @forelse ($estadisticas as $estadistica)
            <tr>

                <td>{{$estadistica->marca}}</td>
                <td>{{$estadistica->conteo}}</td>


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






