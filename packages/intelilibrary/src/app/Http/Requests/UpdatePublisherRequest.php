<?php

namespace Softwarescares\Intelilibrary\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublisherRequest extends FormRequest
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
            "avatar" => "required|string|max:255",
            'publisher' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:publishers',
            'phone' => 'required|max:255|unique:publishers',
            "address" => "required|string",
            "website" => "required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/",
        ];
    }
}
