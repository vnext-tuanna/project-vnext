<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
        return $this->isMethod('POST') ? $this->store() : $this->update();
    }
    public function store()
    {
        return [
            'title' => 'required',
            'description' => 'required',
        ];
    }
    public function update()
    {
        return [
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required. Please input title',
            'description.required' => 'Description is required. Please input description',
        ];
    }
}
