<?php

namespace App\Http\Requests\Countries;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountry extends FormRequest
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
			'title' => 'required|string',
			'slug' => 'required|string|unique:countries',
			'description' => 'nullable|string',
			'flag' => 'nullable|image',
			'map' => 'nullable|string'
        ];
    }
}
