<?php

namespace App\Http\Requests\Pages;

use Illuminate\Foundation\Http\FormRequest;

class StorePage extends FormRequest
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
			'slug' => 'required|string|unique:pages',
			'body' => 'required|string',
			'description' => 'nullable|string',
			'country_id' => 'nullable|integer'
//			'keywords' => 'nullable|string'
        ];
    }
}
