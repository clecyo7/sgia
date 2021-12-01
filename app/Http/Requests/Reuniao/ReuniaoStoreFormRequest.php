<?php

namespace App\Http\Requests\Reuniao;

use Illuminate\Foundation\Http\FormRequest;

class ReuniaoStoreFormRequest extends FormRequest
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
            'name'              => 'required|min:3|max:100',
            'data'              => 'required|date|after:tomorrow',
            'local'             => 'required',
            'horario'           => 'required',
            'participantes'     => 'required',
            'departamentoReu'   => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required'              => 'O campo nome é de preenchimento obrigatório!',
            'name.min'                   => 'O campo nome precisa ter no mínimo 3 caracteres',
            'name.max'                   => 'O campo nome precisa ter no máximo 100 caracteres',      
            'data.required'              => 'O campo Data é de preenchimento obrigatório!',
            'local.required'             => 'O campo Local é de preenchimento obrigatório!',           
            'horario.required'           => 'O campo Horário é de preenchimento obrigatório!',       
            'participantes.required'     => 'O campo Participantes é de preenchimento obrigatório!',       
            'departamentoReu.required'   => 'O campo Departamento é de preenchimento obrigatório!',
        ];
    }
}
