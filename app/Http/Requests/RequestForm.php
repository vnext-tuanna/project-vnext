<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestForm extends FormRequest
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
        return [
            'start_date' => 'required',
            'end_date' => 'required',
            'content_request' => 'required|min:10',
        ];
    }
    public function messages()
    {
        return [
            'start_date.required' => 'Date is required. Please select date',
            'end_date.required' => 'Date is required. Please select date',
            'content_request.required' => 'Content is required. Please input content',
        ];
    }
}
