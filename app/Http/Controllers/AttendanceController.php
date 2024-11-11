<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Attendance;
use App\Models\Member;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index() {
        $activities = Activity::all();
        $members = Member::all();
        return view('attendances.index', compact('activities', 'members'));
    }

    public function store(Request $request) {
        $request->validate([
            'activity_id' => 'required|exists:activities,id',
            'members' => 'required|array',
        ]);

        foreach ($request->members as $member_id) {
            Attendance::create([
                'activity_id' => $request->activity_id,
                'member_id' => $member_id,
            ]);
        }

        return redirect()->route('attendances.index')->with('success', 'Absensi berhasil disimpan');
    }
}
