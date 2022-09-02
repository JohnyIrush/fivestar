<?php

namespace Softwarescares\Inteliacademic\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQualificationRequest extends FormRequest
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
        return ['student_id' => 'required|integer',
            
            'title' => 'required|string',
            'school_name' => 'required|string',
            'school_level_id' => 'required|integer',
            'meangrade' => 'required|string',
            'meanscore' => 'required|integer',
            'points' => 'required|integer',
            'start_year' => 'required|date',
            'end_year' => 'required|date',
            'duration' => 'required|integer'
        ];
    }
}
