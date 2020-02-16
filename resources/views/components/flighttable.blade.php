<div class="row">
    <div class="col-12 m-2">
        <table class="table table-striped table-borderless">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Salida</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Llegada</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Asientos Disponibles</th>
                    <th scope="col">Reservar</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($flights as $flight)
                <tr>
                    <th id="departure-name-{{ $flight->id }}" scope="row">{{ $flight->departureAirport->name }} ({{ $flight->departureAirport->iata_code }})</th>
                    <td id="departure-date-{{ $flight->id }}">{{ date('H:i:s d/m/Y', strtotime($flight->departure_date)) }}</th>
                    <td id="arrival-name-{{ $flight->id }}">{{ $flight->arrivalAirport->name }} ({{ $flight->arrivalAirport->iata_code }})</td>
                    <td id="arrival-date-{{ $flight->id }}">{{ date('H:i:s d/m/Y', strtotime($flight->arrival_date)) }}</td>
                    <td>$ {{ number_format($flight->base_price, 0, ',', '.') }}</td>
                    <td class="text-center">{{ $flight->availableSeats }}</td>
                    <td class="text-center"><a id="{{ $flight->id }}" class="icon reservation"><i class="material-icons">flight_takeoff</i></a></td>
                </tr>
            @empty
            <tr>
                <th colspan="6">
                    <p>{{ $no_flight_message }}</p>
                </th>
            </tr>
            @endforelse
            </tbody>
        </table>
        <input type="hidden" data-url="{{ route(reservation.create) }}">
    </div>
</div>
