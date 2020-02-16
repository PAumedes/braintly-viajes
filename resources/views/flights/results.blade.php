@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 m-2">
            @includeWhen($errors->any(), 'components.errors', ['errors' => $errors])
        </div>
    </div>

    @include('components.flighttable', [
        'flights' => $flights
        'no_flight_message' => 'No se ha encontrado ningún vuelo con los parámetros ingresados. Por favor reintente la búsqueda con otros parámetros',
        ])
</div>

@endsection
