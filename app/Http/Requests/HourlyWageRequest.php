<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HourlyWageRequest extends FormRequest {

    public function rules() {
        return [
            'name'      =>  ['required', 'string'],
            'start_time'=>  ['required', 'date_format:H:i'],
            'end_time'  =>  ['required', 'date_format:H:i'],
        ];
    }
}
