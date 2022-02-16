<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'weather',
        'mood',
        'date',
        'pick_up_person',
        'pick_up_time',
        'sleep_0100_home',
        'sleep_0130_home',
        'sleep_0200_home',
        'sleep_0230_home',
        'sleep_0300_home',
        'sleep_0330_home',
        'sleep_0400_home',
        'sleep_0430_home',
        'sleep_0500_home',
        'sleep_0530_home',
        'sleep_0600_home',
        'sleep_0630_home',
        'sleep_0700_home',
        'sleep_0730_home',
        'sleep_0800_home',
        'sleep_0830_home',
        'sleep_0900_home',
        'sleep_0930_home',
        'sleep_1000_home',
        'sleep_1030_home',
        'sleep_1100_home',
        'sleep_1130_home',
        'sleep_1200_home',
        'sleep_1230_home',
        'sleep_1300_home',
        'sleep_1330_home',
        'sleep_1400_home',
        'sleep_1430_home',
        'sleep_1500_home',
        'sleep_1530_home',
        'sleep_1600_home',
        'sleep_1630_home',
        'sleep_1700_home',
        'sleep_1730_home',
        'sleep_1800_home',
        'sleep_1830_home',
        'sleep_1900_home',
        'sleep_1930_home',
        'sleep_2000_home',
        'sleep_2030_home',
        'sleep_2100_home',
        'sleep_2130_home',
        'sleep_2200_home',
        'sleep_2230_home',
        'sleep_2300_home',
        'sleep_2330_home',
        'sleep_2400_home',
        'sleep_2430_home',
        'sleep_0100_school',
        'sleep_0130_school',
        'sleep_0200_school',
        'sleep_0230_school',
        'sleep_0300_school',
        'sleep_0330_school',
        'sleep_0400_school',
        'sleep_0430_school',
        'sleep_0500_school',
        'sleep_0530_school',
        'sleep_0600_school',
        'sleep_0630_school',
        'sleep_0700_school',
        'sleep_0730_school',
        'sleep_0800_school',
        'sleep_0830_school',
        'sleep_0900_school',
        'sleep_0930_school',
        'sleep_1000_school',
        'sleep_1030_school',
        'sleep_1100_school',
        'sleep_1130_school',
        'sleep_1200_school',
        'sleep_1230_school',
        'sleep_1300_school',
        'sleep_1330_school',
        'sleep_1400_school',
        'sleep_1430_school',
        'sleep_1500_school',
        'sleep_1530_school',
        'sleep_1600_school',
        'sleep_1630_school',
        'sleep_1700_school',
        'sleep_1730_school',
        'sleep_1800_school',
        'sleep_1830_school',
        'sleep_1900_school',
        'sleep_1930_school',
        'sleep_2000_school',
        'sleep_2030_school',
        'sleep_2100_school',
        'sleep_2130_school',
        'sleep_2200_school',
        'sleep_2230_school',
        'sleep_2300_school',
        'sleep_2330_school',
        'sleep_2400_school',
        'sleep_2430_school',
        'temperature_01_home',
        'temperature_02_home',
        'temperature_03_home',
        'temperature_04_home',
        'temperature_05_home',
        'temperature_06_home',
        'temperature_07_home',
        'temperature_08_home',
        'temperature_09_home',
        'temperature_10_home',
        'temperature_11_home',
        'temperature_12_home',
        'temperature_13_home',
        'temperature_14_home',
        'temperature_15_home',
        'temperature_16_home',
        'temperature_17_home',
        'temperature_18_home',
        'temperature_19_home',
        'temperature_20_home',
        'temperature_21_home',
        'temperature_22_home',
        'temperature_23_home',
        'temperature_24_home',
        'temperature_01_school',
        'temperature_02_school',
        'temperature_03_school',
        'temperature_04_school',
        'temperature_05_school',
        'temperature_06_school',
        'temperature_07_school',
        'temperature_08_school',
        'temperature_09_school',
        'temperature_10_school',
        'temperature_11_school',
        'temperature_12_school',
        'temperature_13_school',
        'temperature_14_school',
        'temperature_15_school',
        'temperature_16_school',
        'temperature_17_school',
        'temperature_18_school',
        'temperature_19_school',
        'temperature_20_school',
        'temperature_21_school',
        'temperature_22_school',
        'temperature_23_school',
        'temperature_24_school',
        'defecation_1_home',
        'defecation_2_home',
        'defecation_3_home',
        'defecation_4_home',
        'defecation_5_home',
        'defecation_6_home',
        'defecation_7_home',
        'defecation_8_home',
        'defecation_9_home',
        'defecation_10_home',
        'defecation_11_home',
        'defecation_12_home',
        'defecation_13_home',
        'defecation_14_home',
        'defecation_15_home',
        'defecation_16_home',
        'defecation_17_home',
        'defecation_18_home',
        'defecation_19_home',
        'defecation_20_home',
        'defecation_21_home',
        'defecation_22_home',
        'defecation_23_home',
        'defecation_24_home',
        'defecation_1_school',
        'defecation_2_school',
        'defecation_3_school',
        'defecation_4_school',
        'defecation_5_school',
        'defecation_6_school',
        'defecation_7_school',
        'defecation_8_school',
        'defecation_9_school',
        'defecation_10_school',
        'defecation_11_school',
        'defecation_12_school',
        'defecation_13_school',
        'defecation_14_school',
        'defecation_15_school',
        'defecation_16_school',
        'defecation_17_school',
        'defecation_18_school',
        'defecation_19_school',
        'defecation_20_school',
        'defecation_21_school',
        'defecation_22_school',
        'defecation_23_school',
        'defecation_24_school',
        'meal_1_home',
        'meal_2_home',
        'meal_3_home',
        'meal_4_home',
        'meal_5_home',
        'meal_6_home',
        'meal_7_home',
        'meal_8_home',
        'meal_9_home',
        'meal_10_home',
        'meal_11_home',
        'meal_12_home',
        'meal_13_home',
        'meal_14_home',
        'meal_15_home',
        'meal_16_home',
        'meal_17_home',
        'meal_18_home',
        'meal_19_home',
        'meal_20_home',
        'meal_21_home',
        'meal_22_home',
        'meal_23_home',
        'meal_24_home',
        'meal_1_school',
        'meal_2_school',
        'meal_3_school',
        'meal_4_school',
        'meal_5_school',
        'meal_6_school',
        'meal_7_school',
        'meal_8_school',
        'meal_9_school',
        'meal_10_school',
        'meal_11_school',
        'meal_12_school',
        'meal_13_school',
        'meal_14_school',
        'meal_15_school',
        'meal_16_school',
        'meal_17_school',
        'meal_18_school',
        'meal_19_school',
        'meal_20_school',
        'meal_21_school',
        'meal_22_school',
        'meal_23_school',
        'meal_24_school',
        'state_0_home',
        'state_0_school',
        'contact_0_home',
        'contact_0_school',
        'meal_time_1_home',
        'meal_time_2_home',
        'meal_time_3_home',
        'meal_time_1_school',
        'meal_time_2_school',
        'meal_time_3_school',
        'meal_amount_1_home',
        'meal_amount_2_home',
        'meal_amount_3_home',
        'meal_amount_1_school',
        'meal_amount_2_school',
        'meal_amount_3_school',
        'meal_memo_1_home',
        'meal_memo_2_home',
        'meal_memo_3_home',
        'meal_memo_1_school',
        'meal_memo_2_school',
        'meal_memo_3_school',
        'mood_1_home',
        'mood_2_home',
        'mood_1_school',
        'mood_2_school',
        'defecation_count_1_home',
        'defecation_count_2_home',
        'defecation_count_1_school',
        'defecation_count_2_school',
        'sleep_start_1_home',
        'sleep_end_1_home',
        'sleep_start_2_home',
        'sleep_end_2_home',
        'sleep_start_1_school',
        'sleep_end_1_school',
        'sleep_start_2_school',
        'sleep_end_2_school',
        'bathing_home',
        'bathing_school',
        'temperature_time_1_home',
        'temperature_1_home',
        'temperature_time_2_home',
        'temperature_2_home',
        'temperature_time_3_home',
        'temperature_3_home',
        'temperature_time_1_school',
        'temperature_1_school',
        'temperature_time_2_school',
        'temperature_2_school',
        'temperature_time_3_school',
        'temperature_3_school',
        'state_1_home',
        'state_1_school',
        'contact_3_home',
        'contact_3_school'
    ];
}
