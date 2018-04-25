<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSubscription extends FormRequest
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
            'service' => 'required'
        ];
    }

    /**
     * @return array
     */
    public function messages() {
        return [
            'service.required' => 'Please pick a service if you wish to setup a subscription.'
        ];
    }
}
