<?php

namespace App\Http\Requests\Consultations;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultation extends FormRequest
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
			'date' => 'required',
			'time' => 'nullable',
			'full_name' => 'required',
			'email' => 'required',
			'done' => 'nullable',
			'comments' => 'nullable',
			'phone' => 'nullable'
        ];
    }
}
