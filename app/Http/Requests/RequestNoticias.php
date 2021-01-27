<?php

namespace App\Http\Requests;
use Illuminate\validation\Factory as ValidationFactory;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidarNoticias;

class RequestNoticias extends FormRequest
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
            
         'titulo'=>['required', new ValidarNoticias()],
         'descripcion'=>'required',
         'imagen' => 'required|image|max:1000'
        ];
    }
}
