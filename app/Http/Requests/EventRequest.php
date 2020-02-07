<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'start' => 'required|date_format:Y-m-d H:i:s|before:end',
            'end' => 'required|date_format:Y-m-d H:i:s|after:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Preencha o campo Título',
            'title.min' => 'Minimo de 3 caracteres para o Titulo',
            'start.date_format' => "Preencha uma data inicial com valor valido!",
            'start.before' => "A data/hora inicial deve ser menor que a data final!",
            'end.date_format' => "Preencha uma data final com valor valido!",
            'end.after' => "A data/hora final deve ser maior que a data inicial!",
        ];
    }
}
