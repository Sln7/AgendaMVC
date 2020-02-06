<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FastEventRequest extends FormRequest
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

    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'start' => 'date_format:H:i:s|before:end',
            'end' => 'date_format:H:i:s|after:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Preencha o campo Título',
            'title.min' => 'Minimo de 3 caracteres para o Titulo',
            'start.date_format' => "Preencha uma hora inicial com valor valido!",
            'start.before' => "A hora inicial deve ser menor que a data final!",
            'end.date_format' => "Preencha uma hora final com valor valido!",
            'end.after' => "A hora final deve ser maior que a data inicial!",
        ];
    }
}
