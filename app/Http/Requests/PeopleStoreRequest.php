<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleStoreRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'nationality_id' => 'required|integer',
            'biophoto_id' => 'required|integer',
            'nombre'=> 'required',
            'apellido'=> 'required',
            'dni'=> 'required|string|max:8',
            'direccion'=> 'required',
            'celular'=> 'required',
        'correo'=> 'required|string|email|max:180',
            'rol'=> 'required',
        ];
    }
}
