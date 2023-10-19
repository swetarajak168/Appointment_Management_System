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
                    'email' =>[
                        'required',
                        Rule::unique('doctors')->ignore($doctor->id),
                    ],            
                    'Contact' => 'required|string|max:255',
                    'Province' => 'required|string|max:255',
                    'District' => 'required|string|max:255',
                    'Municipality' => 'required|string|max:255',
                    'Ward' => 'required|Integer|max:255',
                    'tole' => 'required|string|max:255',
                    'gender' => 'required|string|max:255',
                    'dob' => 'required|string|max:255',
                    'english_dob' =>'required',
                    'specialization' => 'required|string|max:255',
                    'Department' => 'required|string|max:255',
                    'image' => 'file|nullable|mimes:jpeg,png,jpg,gif|max:2048',
                    'user_id' => 'nullable|numeric',
                    'status' => 'required',
                    'role' => 'nullable'
                
            ];           
        }
        return [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'license_no' => 'required|string|max:255',
            'email' =>'required|unique:doctors,email',                      
            'Contact' => 'required|string|max:255',
            'Province' => 'required|string|max:255',
            'District' => 'required|string|max:255',
            'Municipality' => 'required|string|max:255',
            'Ward' => 'required|Integer|max:255',
            'tole' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'dob' => 'required|string|max:255',
            'english_dob' =>'required',
            'specialization' => 'required|string|max:255',
            'Department' => 'required|string|max:255',
            'image' => 'file|nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'nullable|numeric',
            'status' => 'required',
            'role' => 'nullable'        
    ];      
        
    }
}
