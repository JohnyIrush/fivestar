<?php

namespace Softwarescares\Intelilibrary\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
    "book_category_id"=> "required|integer",
    "title"=> "required|string|max:255",
    "title_long"=> "required|string",
    "isbn"=> "required",
    "isbn13"=> "required",
    "dewey_decimal"=> "required",
    "binding"=> "required",
    "language"=> "required|string",
    "date_published"=> "required|date",
    "edition"=> "required",
    "pages"=> "required|integer",
    "dimensions"=> "required",
    "overview"=> "required|string",
    "image"=> "required",
    "msrp"=> "required|integer",
    "price"=> "required|integer",
    "excerpt"=> "required|string",
    "synopsys"=> "required|string",
    "no_of_copies"=> "required|integer",
    "volume"=> "required",
    "status" => "required"
        ];
    }
}
