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
        'no_flight_message' => 'No hay ningún vuelo disponible. Por favor reintente en unos minutos',
        ])
</div>
@endsection

@include('modals.reservation')

@section('scripts')
<script src="{{ asset('js/flights/reservation.js') }}"></script>
@endsection
