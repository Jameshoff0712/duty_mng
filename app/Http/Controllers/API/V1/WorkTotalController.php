<?php

namespace App\Http\Controllers\API\V1;

use App\Exports\AttendanceTotalExport;
use App\Http\Requests\WorkTotal\WorkTotalCsvRequest;
use App\Http\Requests\WorkTotal\WorkTotalQuery;
use App\Models\AttendanceTotal;
use App\Models\Office;
use App\Models\Year;
use App\Services\AttendanceTotalService;
use Illuminate\Support\Facades\Gate;
use Laravel\Sanctum\PersonalAccessToken;
use Maatwebsite\Excel\Facades\Excel;

class WorkTotalController extends BaseController
{
    public function get(Office $office, WorkTotalQuery $request, AttendanceTotalService $attendanceTotalService)
    {
        $currentUser = auth()->user();
        $data = $request->validated();
        if (!Gate::forUser($currentUser)->allows('get-office-work-total', $office)) {
            abort(403, "You are not allowed");
        }
        if (!empty($data['retire_included']))
        {
            $users = $office->users;
        } else {
            $users = $office->users()->where(['enrolled' => true])->get();
        }

        $totals = [];
        foreach($users as $user)
        {
            [$attendances, $attendanceTotal, $attendanceMetaItems] = $attendanceTotalService->calculateAttendanceTotal($user, $data['month']);
            $item = $user->toArray();
            $item['total'] = $attendanceTotal;

            $totals[] = $item;
        }
        return $this->sendResponse($totals);
    }
    public function csv(Office $office, WorkTotalCsvRequest $request)
    {
        if (!$request->has('token'))
        {
            abort(403, "You are not allowed");
        }
        $token = $request->input('token');
        $token = PersonalAccessToken::findToken($token);

        if (!$token) {
            abort(403, "You are not allowed");
        }
        $currentUser = $token->tokenable;
        if (!$currentUser) {
            abort(403, "You are not allowed");
        }

        $data = $request->validated();
        if (!Gate::forUser($currentUser)->allows('get-office-work-total', $office)) {
            abort(403, "You are not allowed");
        }
        if (!empty($data['retire_included']))
        {
            $users = $office->users;
        } else {
            $users = $office->users()->where(['enrolled' => true])->get();
        }

        $data = $request->validated();
        $start = $data['start'];
        $end = $data['end']??$start;

        $users = $office->users;
        $userIds = $users->pluck('id');
        $attendanceTotals = AttendanceTotal::where([
            ['month_num', '>=', $start],
            ['month_num', '<=', $end]
        ])
        ->whereIn('user_id', $userIds)
        ->orderBy('user_id')
        ->orderBy('month_num')
        ->get();

        $totals = [];
        foreach ($attendanceTotals as $attendanceTotal)
        {
            $item = $attendanceTotal->toArray();
            $user = $users->firstWhere('id', $attendanceTotal->user_id);
            if ($user)
            {
                $item['user'] = $user;
            }
            $totals[] = $item;
        }
        $startYear = floor($start / 100);
        $startMonth = $start % 100;
        $title = $office->name . ' ' . $startYear . '年' . $startMonth . '月　';
        if (!empty($data['end']))
        {
            $endYear = floor($data['end']);
            $endMonth = $data['end'] % 100;
            $title .= '~ ' . $endYear . '年' . $endMonth . '月　勤務集計';
        }
        return Excel::download(new AttendanceTotalExport($totals, $title, $office), $title . '.xlsx');
    }
}
