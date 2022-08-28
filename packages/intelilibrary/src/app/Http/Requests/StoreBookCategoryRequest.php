<?php

namespace Softwarescares\Intelilibrary\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookCategoryRequest extends FormRequest
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
            "image" => "required|string|max:255",
            'category' => 'required|string|max:255|unique:book_categories',
            'description' => 'required|string|max:255',
            "status" => "required",
        ];
    }
}
