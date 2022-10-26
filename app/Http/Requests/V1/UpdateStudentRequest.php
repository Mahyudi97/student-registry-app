<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
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
        $method = $this->method();

        if($method=='PUT'){
            //PUT - update all variables
            return [
                'name' => ['required'],
                'email' => ['required','email'],
                'address' => ['required'],
                'course' => ['required'],
            ];
        }else{
            //PATCH - update selected variables
            return [
                'name' => ['sometimes','required'],
                'email' => ['sometimes','required','email'],
                'address' => ['sometimes','required'],
                'course' => ['sometimes','required'],
            ];
        }
        
    }
}
