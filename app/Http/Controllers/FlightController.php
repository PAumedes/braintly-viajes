<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchFlights;
use App\Http\Requests\SearchFlightsByAirport;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airport::orderBy('location')->get();
        $flights = Flight::whereStatus('scheduled')->get();

        return view('flights.index', compact('flights', 'airports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Searchs all the flights by a departure airport id, arrival airport id and departure date.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(SearchFlights $request)
    {
        $airports = Airport::orderBy('location')->get();
        $flights = Flight::where('departure_airport_id', $request->departure_airport_id)
            ->Where('arrival_airport_id', $request->arrival_airport_id)
            ->whereDate('departure_date', $request->departure_date)
            ->whereStatus('scheduled')
            ->get();

        return view('flights.search.index', compact('airports', 'flights'));
    }

    /**
     * Searchs all the flights by a query string.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchByAirport(SearchFlightsByAirport $request)
    {
        $airports = Airport::orderBy('location')->get();
        $flights = Flight::searchByAirport($request->q);

        return view('flights.search.byairport', compact('airports', 'flights'));
    }
}
