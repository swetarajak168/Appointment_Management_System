<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            'nepali_date'=>'required',
            'english_date'=>'required',
           
            'start_time'=>'required',
            'end_time'=>'required',            
            'doctor_id' =>'required',
            'user_id'=>'nullable'
        ];
    }
}
