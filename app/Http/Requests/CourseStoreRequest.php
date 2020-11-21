<?php

namespace App\Http\Requests;

use App\Course;
use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'school' => 'required|string',
            'course_type' => 'required|string',
            'course_id' => 'required|string',
            'course_name' => 'required|string',
            'modality' => 'required|string',
            'schedule' => 'nullable|string',
            'duration' => 'required|integer',
            'facilitator_requirement' => 'nullable|string',
            'facilitator' => 'nullable|string',
            'classroom' => 'nullable|string',
        ];
    }
}
