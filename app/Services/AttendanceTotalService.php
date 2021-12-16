<?php

namespace App\Services;

use App\Constants\VacationReason;
use App\Models\Attendance;
use App\Models\AttendanceTotal;
use App\Models\EmploymentStatus;
use App\Models\ScheduledWorking;
use App\Models\ShiftPlan;
use App\Models\User;
use App\Models\Year;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class AttendanceTotalService
{
    /**
     * calculate $user's attendance total of $month
     * @param User $user
     * @param int $month // format : YYYYMM
     */
    public function calculateAttendanceTotal(User $user, $month)
    {
        $isInHeadquarter = false;
        if ($user->office && $user->office->is_headquarter) {
            $isInHeadquarter = true;
        }
        $yearNumber = floor($month / 100);
        $monthNumber = $month % 100;

        $year = Year::where([
            ['start', '<=', $month],
            ['end', '>=', $month]
        ])->first();

        $attendances = Attendance::where([
            'user_id'   =>  $user->id,
            'year_id'   =>  $year->id,
            'month'     =>  $monthNumber,
        ])
        ->with('applications')
        ->with('shift1', 'shift2', 'shift3')
        ->get();

        $shifts = ShiftPlan::where([
            'user_id'   =>  $user->id
        ])
        ->whereYear('date', $yearNumber)
        ->whereMonth('date', $monthNumber)
        ->get();


        $monthCarbon = Carbon::parse($yearNumber . '-' . $monthNumber . '-01');
        $daysInMonth = $monthCarbon->daysInMonth;

        $attendanceTotal = new AttendanceTotal();
        $attendanceTotal->user_id = $user->id;
        $attendanceTotal->year_id = $year->id;
        $attendanceTotal->month = $monthNumber;

        $attendanceTotal->working_days = 0;
        $attendanceTotal->total_working_hours = 0;
        $attendanceTotal->total_rest_hours = 0;
        $attendanceTotal->actual_working_hours_weekdays = 0;
        $attendanceTotal->overtime_hours_weekdays = 0;
        $attendanceTotal->scheduled_working_hours_b = 0;
        $attendanceTotal->overtime_hours_statutory = 0;
        $attendanceTotal->overtime_hours_non_statutory = 0;
        $attendanceTotal->midnight_overtime = 0;
        $attendanceTotal->behind_time = 0;
        $attendanceTotal->leave_early = 0;
        $attendanceTotal->off_shift_working_hours = 0;
        $attendanceTotal->actual_working_hours_saturday = 0;
        $attendanceTotal->overtime_hours_saturday = 0;
        $attendanceTotal->scheduled_working_hours_a = 0;
        $attendanceTotal->excess_and_deficiency_time = 0;

        $attendanceTotal->substitute_holiday_time = 0;
        $attendanceTotal->consecutive_working_hours = 0;
        $attendanceTotal->annual_paid_time = 0;
        $attendanceTotal->annual_paid_days = 0;
        $attendanceTotal->special_paid_time = 0;
        $attendanceTotal->special_paid_days = 0;
        $attendanceTotal->special_unpaid_time = 0;
        $attendanceTotal->special_unpaid_days = 0;
        $attendanceTotal->other_unpaid_time = 0;
        $attendanceTotal->other_unpaid_days = 0;
        $attendanceTotal->absence_days = 0;

        $attendanceItems = [];
        $attendanceMetaItems = [];
        for($day = 1; $day <= $daysInMonth; $day++)
        {
            $work_hours = 0;                        // 総出勤時間
            $rest_hours = 0;                        // 休憩時間
            $over_shift_time = 0;                   // シフトの時間を超えた時間
            $behind_time = 0;                       // 遅刻時間
            $leave_early = 0;                       // 早退時間
            $midnight_overtime = 0;                 // 深夜時間
            $total_working_hours = 0;               // 実働時間
            $overtime_working_hours = 0;            // 残業時間
            $actual_working_hours = 0;              // 残業外労働時間
            $overtime_hours_non_statutory = 0;      // 法定外残業時間
            $overtime_hours_statutory = 0;          // 法定内残業時間
            $excess_and_deficiency_time = 0;        // 過不足時間
            $scheduled_working_hours_b = 0;         // 【計算】所定労働時間
            $off_shift_working_hours = 0;           // シフト外勤務時間
            $substitute_holiday_time = 0;           // 代休時間


            $attendance = $attendances->firstWhere('day', $day);

            $dayShifts = $shifts->filter(function ($value, $key) use ($yearNumber, $monthNumber, $day) {
                return $value->date->format('Y-m-d') === $yearNumber . '-' . sprintf('%02d', $monthNumber) . '-' . sprintf('%02d', $day);
            });

            $shiftExisting = ($dayShifts->count() > 0);
            if (!$attendance) {
                if (!$shiftExisting) {
                    $attendanceItems[$day] = [];
                    $attendanceMetaItems[$day] = [];
                    continue;
                } else {
                    $workShifts = $dayShifts->filter(function ($value, $key) {
                        return !$value->vacation_reason_id || $value->vacation_reason_id === VacationReason::WORK;
                    });
                    if ($workShifts->count())
                    {
                        $attendanceTotal->absence_days++;
                        $attendanceItems[$day] = [];
                        $attendanceMetaItems[$day] = [
                            'absent'    =>  true,
                        ];
                        continue;
                    }
                    $attendanceMetaItems[$day] = [];
                    $vacation_time = $user->working_hours * 60;

                    if ($dayShifts->first()->vacation_reason_id === VacationReason::ANNUAL_PAID)
                    {
                        $attendanceItems[$day] = [
                            'annual_paid_time'  =>  $vacation_time
                        ];
                        $attendanceTotal->annual_paid_time += $vacation_time;
                        $attendanceTotal->annual_paid_days++;
                    }
                    if ($dayShifts->first()->vacation_reason_id === VacationReason::SPECIAL_PAID)
                    {
                        $attendanceItems[$day] = [
                            'special_paid_time'  =>  $vacation_time
                        ];
                        $attendanceTotal->special_paid_time += $vacation_time;
                        $attendanceTotal->special_paid_days++;
                    }
                    if ($dayShifts->first()->vacation_reason_id === VacationReason::SPECIAL_UNPAID)
                    {
                        $attendanceItems[$day] = [
                            'special_unpaid_time'  =>  $vacation_time
                        ];
                        $attendanceTotal->special_unpaid_time += $vacation_time;
                        $attendanceTotal->special_unpaid_days++;
                    }
                    if ($dayShifts->first()->vacation_reason_id === VacationReason::OTHER_UNPAID)
                    {
                        $attendanceItems[$day] = [
                            'other_unpaid_days'  =>  $vacation_time
                        ];
                        $attendanceTotal->other_unpaid_time += $vacation_time;
                        $attendanceTotal->other_unpaid_days++;
                    }
                    continue;
                }
            }

            // boc: shift foreach
            for ($i = 1; $i < 3; $i++)
            {
                $commuting_time_i = "commuting_time_$i";
                $leave_time_i = "leave_time_$i";
                $shift_i = "shift$i";
                $behind_time_i = "behind_time_$i";
                $leave_early_i = "leave_early_$i";

                // boc: filter invalid stamp
                if (!$attendance->$commuting_time_i || !$attendance->$leave_time_i)  continue; // invalid stamp (either commuting time or leave time is empty)
                $wh = $attendance->$commuting_time_i->floatDiffInMinutes($attendance->$leave_time_i, false);
                if ($wh < 0)  continue;             // invalid stamp (leave time is before commuting time)
                // eoc: filter invalid stamp

                $work_hours += $wh;

                if ($attendance->$shift_i) {
                    if ($attendance->$shift_i->rest_start_time && $attendance->$shift_i->rest_end_time) {
                        $rh = diffBetweenTwoTimes($attendance->$shift_i->rest_start_time, $attendance->$shift_i->rest_end_time);

                        // TODO consider rest time is in midnight
                        $rest_start_time = Carbon::parse(
                            $yearNumber . '-' . sprintf('%02d', $monthNumber) . '-' . sprintf('%02d', $day) . ' ' . $attendance->$shift_i->rest_start_time
                        );
                        $rest_end_time = Carbon::parse(
                            $yearNumber . '-' . sprintf('%02d', $monthNumber) . '-' . sprintf('%02d', $day) . ' ' . $attendance->$shift_i->rest_end_time
                        );

                        $rh = calcOverlappedPeriod($attendance->$commuting_time_i, $attendance->$leave_time_i, $rest_start_time, $rest_end_time);
                        if ($rh > 0) {
                            $rest_hours += $rh;
                        }
                    }
                    $oth = diffBetweenTimeAndCarbonTime($attendance->$shift_i->end_time, $attendance->$leave_time_i);
                    if ($oth > 0) {
                        $over_shift_time += $oth;
                    }
                }
                $behind_time += $attendance->$behind_time_i;
                $leave_early += $attendance->$leave_early_i;

                $midnight_overtime += $this->calcMidnightTime($attendance->$commuting_time_i, $attendance->$leave_time_i);
            }
            // eoc: shift foreach

            $total_working_hours = $work_hours - $rest_hours;
            // boc: calc overtime_working_hours
            if ($user->employment_status_id === EmploymentStatus::NORMAL) {
                if (!$isInHeadquarter) {
                    $overtime_working_hours = $over_shift_time;
                } else {
                    // TODO #LK-32
                    if ($total_working_hours > ($user->working_hours * 60)) {
                        $overtime_working_hours = $total_working_hours - $user->working_hours * 60;
                    }
                }
            } else {
                if ($total_working_hours > ($user->working_hours * 60)) {
                    $overtime_working_hours = $total_working_hours - 8 * 60;
                }
            }
            // eoc: calc overtime_working_hours

            // boc: calc off_shift_working_hours
            if ($user->employment_status_id === EmploymentStatus::NORMAL) {
                if (!$shiftExisting) {
                    $off_shift_working_hours = $work_hours - $rest_hours;
                }
            } else {
                $off_shift_working_hours = !$shiftExisting ? 0 : $over_shift_time;
            }
            // eoc: calc off_shift_working_hours

            // boc: calc overtime_hours_non_statutory
            $overtime_hours_non_statutory = $work_hours > 60 * 8 ? $over_shift_time : 0;
            $overtime_hours_statutory = $work_hours < 60 * 8 ? $over_shift_time : 0;
            // eoc: calc overtime_hours_non_statutory

            // boc: calc actual_working_hours
            if ($user->employment_status_id === EmploymentStatus::NORMAL) {
                $actual_working_hours = $total_working_hours - $off_shift_working_hours - $over_shift_time;
            } else {
                $actual_working_hours = $total_working_hours - $overtime_hours_non_statutory;
            }
            // eoc: calc actual_working_hours


            $substitute_holiday_time = $attendance->substitute_time;
            $annual_paid_time = $attendance->annual_paid_time;
            $special_paid_time = $attendance->special_paid_time;
            $other_unpaid_time = $attendance->other_unpaid_time;
            $special_unpaid_time = $attendance->special_unpaid_time;

            $scheduled_working_hours_b = $total_working_hours + ($overtime_working_hours + $behind_time + $leave_early +
            $annual_paid_time + $special_paid_time + $other_unpaid_time + $special_unpaid_time);
            // put together into attendanceTotal
            if (
                $attendance->commuting_time_1
                || $attendance->commuting_time_2
                || $attendance->commuting_time_3
                || $attendance->leave_time_1
                || $attendance->leave_time_2
                || $attendance->leave_time_3
            ) {
                $attendanceTotal->working_days++;   // 勤務日数
            }
            $attendanceTotal->total_working_hours += $total_working_hours;
            if ($attendance->day_of_week === 0 || $attendance->day_of_week === 6) {
                $attendanceTotal->actual_working_hours_saturday += $actual_working_hours;
                $attendanceTotal->overtime_hours_saturday += $overtime_working_hours;
            } else {
                $attendanceTotal->actual_working_hours_weekdays += $actual_working_hours;
                $attendanceTotal->overtime_hours_weekdays += $overtime_working_hours;
            }

            $attendanceTotal->total_rest_hours += $rest_hours;

            $attendanceTotal->scheduled_working_hours_b += $scheduled_working_hours_b;
            $attendanceTotal->overtime_hours_statutory += $overtime_hours_statutory;
            $attendanceTotal->overtime_hours_non_statutory += $overtime_hours_non_statutory;
            $attendanceTotal->midnight_overtime += $midnight_overtime;
            $attendanceTotal->behind_time += $behind_time;
            $attendanceTotal->leave_early += $leave_early;
            $attendanceTotal->off_shift_working_hours += ($off_shift_working_hours - $substitute_holiday_time);
            //TODO [#LK-40] calc consecutive work

            $attendanceTotal->substitute_holiday_time += $substitute_holiday_time;
            $attendanceTotal->annual_paid_time += $annual_paid_time;
            $attendanceTotal->special_paid_time += $special_paid_time;
            $attendanceTotal->special_unpaid_time += $special_unpaid_time;
            $attendanceTotal->other_unpaid_time += $other_unpaid_time;
            if ($annual_paid_time) {
                $attendanceTotal->annual_paid_days++;
            }
            if ($special_paid_time) {
                $attendanceTotal->special_paid_days++;
            }
            if ($special_unpaid_time) {
                $attendanceTotal->special_unpaid_days++;
            }
            if ($other_unpaid_time) {
                $attendanceTotal->other_unpaid_days++;
            }

            $attendanceItems[$day] = $attendance;
            $attendanceMetaItems[$day] = [
                'working_hours' =>  $total_working_hours,
                'rest_hours'    =>  $rest_hours,
                'actual_working_hours'=>    $actual_working_hours,
                'overtime_hours_statutory'=>$overtime_hours_statutory,
                'overtime_hours_non_statutory'=>    $overtime_hours_non_statutory,
                'midnight_overtime' =>  $midnight_overtime,
                'off_shift_working_hours'   =>  $off_shift_working_hours,
                'rest_hours'        =>  $rest_hours
            ];
        }
        // eoc: days foreach

        if ($user->office)
        {
            $scheduled_working = ScheduledWorking::where([
                'year_id'   =>  $year->id,
                'month'     =>  $monthNumber,
                'office_id' =>  $user->office->id,
                ])->first();

            if ($scheduled_working) {
                $attendanceTotal->scheduled_working_hours_a = 60 * $user->working_hours * $scheduled_working->days;   // 所定労働時間マスタで登録した事業所毎の日数×社員マスタに登録した個々人の勤務時間で算出
                $attendanceTotal->excess_and_deficiency_time = $attendanceTotal->scheduled_working_hours_b - $attendanceTotal->scheduled_working_hours_a; // 過不足時間 = 登録した所定労働時間－計算した所定労働時間
            }
        }

        return [$attendanceItems, $attendanceTotal, $attendanceMetaItems];
    }

    public function calcMidnightTime(Carbon $start, Carbon $end)
    {
        $date = $start->format('Y-m-d');
        $midStart = Carbon::parse($date . ' 22:00:00');
        $midEnd = Carbon::parse($start->format('Y-m-') . sprintf('%02d', $start->day + 1) . ' 05:00:00');

        return calcOverlappedPeriod($start, $end, $midStart, $midEnd);
    }

}
