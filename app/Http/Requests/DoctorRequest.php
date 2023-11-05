<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
        $doctor = $this->route('doctor');
        // dd($doctor->id);
        if ($this->isMethod('PUT')) {
            return [

                //
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'license_no' => 'required|string|max:255',
                'email' => [
                    'required',
                    Rule::unique('doctors')->ignore($doctor->id),
                ],
                'contact' => 'required|string|max:255',
                'province' => 'required|string|max:255',
                'district' => 'required|string|max:255',
                'municipality' => 'required|string|max:255',
                'ward' => 'required|Integer|max:255',
                'tole' => 'required|string|max:255',
                'gender' => 'required',
                'dob' => 'required|string|max:255',
                'english_dob' => 'required',
                'specialization' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'image' => 'file|nullable|mimes:jpeg,png,jpg,gif|max:2048',
                'user_id' => 'nullable|numeric',
                'status' => 'required',
                'role' => 'nullable',
                'level' => 'required',
                'institution' => 'required',
                'completionDate' => 'required',
                'board' => 'required',
                'marks' => 'required',
                'organization_name' => 'required',
                'position' => 'required',
                'startDate' => 'required',
                'endDate' => 'nullable',
                'jobDescription' => 'required',               
            ];
        }
        return [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'license_no' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'ward' => 'required|Integer|max:255',
            'tole' => 'required|string|max:255',
            'gender' => 'required',
            'dob' => 'required|string|max:255',
            'english_dob' => 'required',
            'specialization' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'image' => 'file|nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'nullable|numeric',
            'status' => 'required',
            'role' => 'nullable',
            'level' => 'required',
            'institution' => 'required',
            'completionDate' => 'required',
            'board' => 'required',
            'marks' => 'required',
            'organization_name' => 'required',
            'position' => 'required',
            'startDate' => 'required',
            'endDate' => 'nullable',
            'jobDescription' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed'

        ];

    }
}
