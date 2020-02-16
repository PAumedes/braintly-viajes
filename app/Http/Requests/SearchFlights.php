<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchFlights extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'departure_airport_id.required' => 'Por favor seleccione un un aeropuerto de origen para la búsqueda',
            'departure_airport_id.numeric'  => 'Ocurrió un error al realizar la búsqueda. Por favor seleccione un aeropuerto de la lista y una fecha para realizar la búsqueda correctamente',
            'departure_airport_id.exists'  => 'Ocurrió un error al realizar la búsqueda. Por favor seleccione un aeropuerto de la lista y una fecha para realizar la búsqueda correctamente',
            'arrival_airport_id.required' => 'Por favor seleccione un un aeropuerto de destino para la búsqueda',
            'arrival_airport_id.numeric'  => 'Ocurrió un error al realizar la búsqueda. Por favor seleccione un aeropuerto de la lista y una fecha para realizar la búsqueda correctamente',
            'arrival_airport_id.exists'  => 'Ocurrió un error al realizar la búsqueda. Por favor seleccione un aeropuerto de la lista y una fecha para realizar la búsqueda correctamente',
            'departure_date.required' => 'Por favor seleccione una fecha para poder realizar la búsqueda',
            'departure_date.date' => 'Por favor seleccione una fecha para poder realizar la búsqueda',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'departure_airport_id' => 'required|numeric|exists:flights,departure_airport_id',
            'arrival_airport_id' => 'required|numeric|exists:flights,arrival_airport_id',
            'departure_date' => 'required|date',
        ];
    }
}
