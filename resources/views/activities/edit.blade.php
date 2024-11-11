<!-- resources/views/activities/edit.blade.php -->
@extends('layout')

@section('title', 'Edit Kegiatan')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Kegiatan</h1>
<form action="{{ route('activities.update', $activity->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="title" class="block">Judul:</label>
        <input type="text" name="title" value="{{ $activity->title }}" class="w-full border px-2 py-1">
    </div>
    <div class="mb-4">
        <label for="description" class="block">Deskripsi:</label>
        <textarea name="description" class="w-full border px-2 py-1">{{ $activity->description }}</textarea>
    </div>
    <div class="mb-4">
        <label for="date" class="block">Tanggal:</label>
        <input type="datetime-local" name="date" value="{{ $activity->date }}" class="w-full border px-2 py-1">
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
