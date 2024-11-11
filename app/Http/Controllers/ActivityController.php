<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() {
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    public function create() {
        return view('activities.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'date' => 'required|date',
        ]);

        Activity::create($request->all());
        return redirect()->route('activities.index')->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function edit(Activity $activity) {
        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, Activity $activity) {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'date' => 'required|date',
        ]);

        $activity->update($request->all());
        return redirect()->route('activities.index')->with('success', 'Kegiatan berhasil diupdate');
    }

    public function destroy(Activity $activity) {
        $activity->delete();
        return redirect()->route('activities.index')->with('success', 'Kegiatan berhasil dihapus');
    }
}
