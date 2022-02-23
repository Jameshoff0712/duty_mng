<?php

namespace App\Http\Requests\Child;

use Illuminate\Foundation\Http\FormRequest;

class ContactBook12SchoolRequest extends FormRequest {

    public function rules()
    {
        return [
            'date'      =>  ['required', 'date_format:Y-m-d'],
            'weather'   =>  ['nullable', 'string'],
            'mood'                  =>  ['nullable', 'in:1,2,3'],
            'pick_up_person'        =>  ['nullable', 'string'],
            'pick_up_time'          =>  ['nullable', 'date_format:H:i'],
            'meal_time_1_school'    =>  ['nullable', 'date_format:H:i'],
            'meal_time_2_school'    =>  ['nullable', 'date_format:H:i'],
            'meal_time_3_school'    =>  ['nullable', 'date_format:H:i'],
            'meal_amount_1_school'  =>  ['nullable', 'in:1,2,3'],
            'meal_amount_2_school'  =>  ['nullable', 'in:1,2,3'],
            'meal_amount_3_school'  =>  ['nullable', 'in:1,2,3'],
            'meal_memo_1_school'    =>  ['nullable', 'string'],
            'meal_memo_2_school'    =>  ['nullable', 'string'],
            'meal_memo_3_school'    =>  ['nullable', 'string'],
            'mood_1_school'         =>  ['nullable', 'in:1,2,3'],
            'mood_2_school'         =>  ['nullable', 'in:1,2,3'],
            'defecation_1_school'   =>  ['nullable', 'in:0,1,2,3'],
            'defecation_2_school'   =>  ['nullable', 'in:0,1,2,3'],
            'defecation_count_1_school' =>  ['nullable', 'numeric'],
            'defecation_count_2_school' =>  ['nullable', 'numeric'],
            'sleep_start_1_school'  =>  ['nullable', 'date_format:H:i'],
            'sleep_end_1_school'    =>  ['nullable', 'date_format:H:i'],
            'sleep_start_2_school'  =>  ['nullable', 'date_format:H:i'],
            'sleep_end_2_school'    =>  ['nullable', 'date_format:H:i'],
            'bathing_school'        =>  ['nullable', 'in:1,2'],
            'temperature_time_1_school' =>  ['nullable', 'date_format:H:i'],
            'temperature_1_school'  =>  ['nullable', 'numeric'],
            'temperature_time_1_school' =>  ['nullable', 'date_format:H:i'],
            'temperature_2_school'  =>  ['nullable', 'numeric'],
            'temperature_time_3_school' =>  ['nullable', 'date_format:H:i'],
            'temperature_3_school'  =>  ['nullable', 'numeric'],
            'state_0_school'        =>  ['nullable', 'string'],

        ];
    }
}