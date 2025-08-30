<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        $id=$this->route('id') ;
        
        
        return [
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', "unique:students,email,{$id}"],
        'phone' => [
            'nullable',
            "unique:students,phone,{$id}",
            'regex:/^(010|011|012|015)[0-9]{8}$/'
        ],
        'department_id' => ['required', 'exists:departments,id'],
        'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'],
        ];
        
        
        
    }
    public function messages(): array
    {
        return [
            'name.required'=>'name is required',
            'email.email'=>'email must be valid email',
            'email.unique'=>'email must be unique',
            'phone.regex'=>'phone must be egyptian phone',
        ];
    }
}