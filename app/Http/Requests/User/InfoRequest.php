<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'province_id'=> "required",
            'city_id' => "required",
            'status_detail'=>"required",
            'mobile1'=>"required",
            'mobile2'=>"required",
            'body'=>"required",
            'postal_code'=>"required",
            'job_place'=>"required",
            'number_insurance'=>"required",
            'height'=>"required",
            'weight'=>"required",
            'birth_day'=>"required",
            'name_identifier'=>"required",
            'mobile_identifier'=>"required",
            'field'=>"required",
            'job'=>"required",
            'father_name'=> 'required',
            'national_code'=> 'required',
            'birth_code'=> 'required',
            'email' => 'required'
        ];
    }
}
