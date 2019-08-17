@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Habitante') }}</div>

                    <div class="card-body">

                        <ul>
                            @if ($errors->any())
                                <div class ="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                        </ul>
                        <form method="POST" action="{{url('crear')}}">

                            @csrf


                            <div class="form-group row">
                                <label for="placa" class="col-md-4 col-form-label text-md-right">{{ __('Placa') }}</label>

                                <div>
                                    <input name="placa" id="placa" type="text" value="{{ old('placa') }}">
                                    {{--            @if ($errors->has('name'))
                                                    <p>{{ $errors->first('name') }}</p>
                                                @endif--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                                <div>
                                    <input name="marca" id="marca" type="text" value="{{ old('marca') }}">
                                    {{--            @if ($errors->has('name'))
                                                    <p>{{ $errors->first('name') }}</p>
                                                @endif--}}
                                </div>
                            </div>




                            <br>

                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                                <div class="col-md-6">
                                    <input name="cedula" id="cedula" type="number" value="{{ old('cedula') }}" >

                                </div>
                            </div>

                            <br>

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input name="nombre" id="nombe" type="text" value="{{ old('nombre') }}" >

                                </div>
                            </div>



                            <br>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







