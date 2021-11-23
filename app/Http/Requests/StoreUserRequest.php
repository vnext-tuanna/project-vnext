<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'email:rfc,dns',
            'password' => 'required|min:6',
            'skill' => 'required',
        ];
    }
    public function update()
    {
        return [
            'name' => 'required|max:255',
            'skill' => 'required',
        ];
    }
}
