<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'activity_id', 'status'];

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function activity() {
        return $this->belongsTo(Activity::class);
    }
}

