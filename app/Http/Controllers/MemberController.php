<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function create() {
        return view('members.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'phone' => 'nullable',
        ]);

        Member::create($request->all());
        return redirect()->route('members.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    public function edit(Member $member) {
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Member $member) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email,' . $member->id,
            'phone' => 'nullable',
        ]);

        $member->update($request->all());
        return redirect()->route('members.index')->with('success', 'Anggota berhasil diupdate');
    }

    public function destroy(Member $member) {
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Anggota berhasil dihapus');
    }
}
