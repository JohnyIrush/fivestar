<?php

namespace Softwarescares\Intelitimetable\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVenueRequest extends FormRequest
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
            "venue" => "required|string",
            "location" => "required|string",
            'section_id' => "required|integer",
            'subject_id' => "required|integer",
            'status' => "required",
        ];
    }
}
