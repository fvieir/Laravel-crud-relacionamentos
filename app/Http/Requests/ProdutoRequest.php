<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
    public function message()
    {
        return [
            'descricao.required' => 'Preencha uma descricão',
            'preco.numeric' => 'Valor tem que ser um número',
            'preco.required' => 'Valor é obrigatório',
            'peso.required' => 'Peso é obrigatório'
        ];
    }

    public function rules()
    {
        return [
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'peso' => 'required'
        ];
    }
}
