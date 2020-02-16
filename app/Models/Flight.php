<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function airplane()
    {
        return $this->belongsTo(Airplane::class);
    }

    public function departureAirport()
    {
        return $this->belongsTo(Airport::class, 'departure_airport_id', 'id');
    }

    public function arrivalAirport()
    {
        return $this->belongsTo(Airport::class, 'arrival_airport_id', 'id');
    }

    public static function searchByAirport($query)
    {
        $airports = Airport::where('name', 'LIKE', "%$query%")
            ->orWhere('location', 'LIKE', "%$query%")
            ->orWhere('iata_code', 'LIKE', "%$query%")
            ->pluck('id')
            ->toArray();

        return self::WhereIn('departure_airport_id', $airports)->orWhereIn('arrival_airport_id', $airports)->whereStatus('scheduled')->get();
    }

    public function getAvailableSeatsAttribute()
    {
        return $this->airplane->economy_class_seats + $this->airplane->first_class_seats;
    }
}
