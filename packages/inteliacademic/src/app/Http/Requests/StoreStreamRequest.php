<?php

namespace Softwarescares\Inteliacademic\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStreamRequest extends FormRequest
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
        "stream" => 'required|string|unique:streams',
        "status" => 'required'
        ];
    }
}
