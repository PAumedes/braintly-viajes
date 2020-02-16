<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchFlightsByAirport extends FormRequest
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
            'q.required' => 'Por favor ingrese un aeropuerto para la búsqueda',
            'q.string'  => 'Por favor ingrese solamente letras. No se aceptan números o caractéres especiales',
            'q.max'  => 'Por favor ingrese un nombre más corto',
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
            'q' => 'required|string|max:255',
        ];
    }
}
