<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSetting extends FormRequest
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
			'name' => 'required|string',
			'email' => 'nullable|string',
			'phone' => 'nullable|string',
			'address' => 'nullable|string',
			'ceo' => 'nullable|string',
			'logo' => 'nullable|image',
			'whatsapp' => 'nullable|string',
			'facebook' => 'nullable|string',
			'youtube' => 'nullable|string',
			'instagram' => 'nullable|string',
			'twitter' => 'nullable|string'
        ];
    }
}
