<?php

namespace Modules\Subject\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject_code'  => 'required|string|unique:subjects,subject_code|max:10',
            'subject_name'  => 'required|string|unique:subjects,subject_name|max:20',  
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
