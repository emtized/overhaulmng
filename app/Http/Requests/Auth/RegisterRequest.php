<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name'=> "required",
            'last_name'=> "required",
            'birth_place'=> "required",
            'avatar'=>"required",
            'status_detail'=>"required",
            'mobile1'=>"required",
            'mobile2'=>"required",
            'body'=>"required",
            'postal_code'=>"required",
            'job_place'=>"required",
            'number_insurance'=>"required",
            'hight'=>"required",
            'weight'=>"required",
            'birth_day'=>"required",
            'name_identifier'=>"required",
            'mobile_identifier'=>"required",
            'field'=>"required",
            'job'=>"required",
            'father_name'=> 'required',
            'national_code'=> 'required',
            'birth_code'=> 'required',
        ];
    }
}
