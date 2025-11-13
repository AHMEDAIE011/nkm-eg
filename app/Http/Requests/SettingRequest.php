<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'site_name'=>['required' , 'string', 'min:2' , 'max:60'],
            'email'=>['required' , 'email'],
            'phone'=>[  'required'],
            'country'=>['nullable' , 'string' , 'max:30'],
            'city'=>['nullable' , 'string' , 'max:30'],
            'street'=>['nullable' , 'string' , 'max:70'],
            'facebook'=>['required' , 'string'],
            'twitter'=>['required' , 'string' ],
            'insagram'=>['required' , 'string' ],
            'youtupe'=>['required' , 'string'],
            'small_desc'=>['required' , 'string' , 'min:10'],
            'logo'=>['nullable' , 'image'],
            'favicon'=>['nullable' , 'image'],
        ];
    }
}
