<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralConfigurationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'config_group'=>'required|min:3|max:191',
            // 'field'=>'required|min:3|max:191',
            // 'label'=>'required|min:3|max:191',
            'value'=>'required|min:3|max:191',
            ];
    }
}
