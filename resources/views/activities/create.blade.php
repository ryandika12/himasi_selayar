<!-- resources/views/activities/create.blade.php -->
@extends('layout')

@section('title', 'Tambah Kegiatan')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Kegiatan</h1>
<form action="{{ route('activities.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="title" class="block">Judul:</label>
        <input type="text" name="title" class="w-full border px-2 py-1">
    </div>
    <div class="mb-4">
        <label for="description" class="block">Deskripsi:</label>
        <textarea name="description" class="w-full border px-2 py-1"></textarea>
    </div>
    <div class="mb-4">
        <label for="date" class="block">Tanggal:</label>
        <input type="datetime-local" name="date" class="w-full border px-2 py-1">
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
