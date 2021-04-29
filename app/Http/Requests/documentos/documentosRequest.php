<?php

namespace App\Http\Requests\documentos;

use Illuminate\Foundation\Http\FormRequest;

class documentosRequest extends FormRequest
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
            'titulo'       => 'required | size:100',
            'nome_arquivo' => 'required | size:100',
            'tipo_id'      => 'required | integer'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required'       => 'O campo titulo é obrigatorio',
            'titulo.size'           => 'Titulo muito grande',
            'nome_arquivo.required' => 'O campo nome do arquivo é obrigatorio',
            'nome_arquivo.size'     => 'Nome muito grande',
            'tipo_id.required'      => 'O campo tipo é obrigatorio',
            'tipo_id.integer'       => 'Tipo inválido'
        ];
    }
}
