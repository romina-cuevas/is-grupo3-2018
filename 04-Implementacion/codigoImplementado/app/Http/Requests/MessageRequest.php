<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//puede ir en false entonces no entraria nunca al strore(request)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//van las reglas de validacion
    {
        return [
            'name'=>'string|required',
            'email'=>'required',
            'message'=>'required|min:6'
        ];
    }
}
