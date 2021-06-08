<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
        return ['nom'=>'required|min:3',
                'email'=>'regex:#^[a-zA-Z0-9-]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$#',
                'message'=>'required|min:10'
            ];
    }

    /**php artisan make:mail OrderShipped
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return ['required'=>'Le Champs :attribute est requis',
                'regex'=>'Une Adresse Email Valide est Obligatoire',
                'min'=>'le champ :attribute doit comporter au moins :min caractères'
            ];
    }
}
