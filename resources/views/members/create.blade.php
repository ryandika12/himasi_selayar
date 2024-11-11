<!-- resources/views/members/create.blade.php -->
@extends('layout')

@section('title', 'Tambah Anggota')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Anggota</h1>
<form action="{{ route('members.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="name" class="block">Nama:</label>
        <input type="text" name="name" class="w-full border px-2 py-1">
    </div>
    <div class="mb-4">
        <label for="email" class="block">Email:</label>
        <input type="email" name="email" class="w-full border px-2 py-1">
    </div>
    <div class="mb-4">
        <label for="phone" class="block">Phone:</label>
        <input type="text" name="phone" class="w-full border px-2 py-1">
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection