<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'application_class_id',
        'reason',
        'time_before_correction',
        'time_after_correction',
        'reason_id',
    ];

    protected $appends = [
        'is_approved'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
    public function getIsApprovedAttribute()
    {
        return !empty($this->attributes['approval_datetime']);
    }
}
