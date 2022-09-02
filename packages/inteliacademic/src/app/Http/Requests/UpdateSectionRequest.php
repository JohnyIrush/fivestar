<?php

namespace Softwarescares\Inteliacademic\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSectionRequest extends FormRequest
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
            'stream_id' => 'required|integer',
            'level_id' => 'required|integer',
            'teacher_id' => 'required|integer',
        ];
    }
}
