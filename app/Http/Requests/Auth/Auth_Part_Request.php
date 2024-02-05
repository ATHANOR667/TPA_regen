<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Auth_Part_Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> ['min:3','max:20','required'],//'regex:/^[a-zA-Z]+$/',
            'prenom'=> ['min:3','max:20','required'],//'regex:/^[a-zA-Z]+$/',
            'date_naiss'=> [],
            'pays_origine'=>['required'],
            'ville_habitation' =>['required'],
            'prop_mission' => ['sometimes'],
            'prop_recue' => ['sometimes'],
            'num_tel'=>['min:6','max:12','required',Rule::unique('particuliers')->ignore($this->route()->parameter('partiulier'))],//,'regex:/^[0-9\-]+$/'
            'num_cni'=>['min:14','max:15','required',Rule::unique('particuliers')->ignore($this->route()->parameter('partiulier'))],//,'regex:/^[0-9\-]+$/'
            'password'=>['min:8','max:20','required',Rule::unique('particuliers')->ignore($this->route()->parameter('partiulier'))],//,'regex:/^[0-9a-zA-Z\-]+$/'
            'email' => ['required',Rule::unique('particuliers')->ignore($this->route()->parameter('partiulier'))]//|regex:/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/
        ];
    }
}
