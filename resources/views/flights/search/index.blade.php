@extends('layouts.master')

@section('header')
@include('components.header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 m-2">
            @includeWhen($errors->any(), 'components.errors', ['errors' => $errors])
            @includeWhen($flights->isNotEmpty(), 'components.searchbar')
        </div>
    </div>

    @include('components.flighttable', [
        'flights' => $flights,
        'no_flight_message' => 'No se ha encontrado ningún vuelo con los parámetros ingresados. Por favor vuelva a realizar la búsqueda con otros parámetros'
        ])
</div>
@endsection
