<!-- resources/views/attendances/index.blade.php -->
@extends('layout')

@section('title', 'Daftar Absensi')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Absensi</h1>
<form action="{{ route('attendances.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="activity_id" class="block">Pilih Kegiatan:</label>
        <select name="activity_id" class="w-full border px-2 py-1">
            @foreach($activities as $activity)
                <option value="{{ $activity->id }}">{{ $activity->title }} - {{ $activity->date }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="members" class="block">Pilih Anggota yang Hadir:</label>
        @foreach($members as $member)
            <div>
                <input type="checkbox" name="members[]" value="{{ $member->id }}">
                <label>{{ $member->name }}</label>
            </div>
        @endforeach
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan Absensi</button>
</form>
@endsection
