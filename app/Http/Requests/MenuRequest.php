<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            //
            'Name'=>'required',
            'Type'=>'required',
            'Order'=>'required|integer',
            'page_id'=>'nullable',
            'module_id'=>'nullable',
            'external_link'=>'nullable',
            'parent_id'=>'nullable',
            'status'=>'required'
        ];
    }
}
