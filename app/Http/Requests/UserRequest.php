<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UserRequest extends FormRequest
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
        $id = $this->route('id');
        if ($this->isMethod('PUT')) {
            return [
                'name' => 'required|string|max:255',
                'email' =>[
                    'required',
                    Rule::unique('users')->ignore($id),
                ],                               
                'role'=> 'required',
                'status'=>'required',
            ];           
        }
       
        return [
            'name' => 'required|string|max:255',
            'email' =>'required|unique:users,email',               
            'password' => 'required|min:8|confirmed',                      
            'role'=> 'required',
            'status'=>'required',
        ]; 
    }
}
