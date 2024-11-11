<!-- resources/views/members/edit.blade.php -->
@extends('layout')

@section('title', 'Edit Anggota')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Anggota</h1>
<form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block">Nama:</label>
        <input type="text" name="name" value="{{ $member->name }}" class="w-full border px-2 py-1">
    </div>
    <div class="mb-4">
        <label for="email" class="block">Email:</label>
        <input type="email" name="email" value="{{ $member->email }}" class="w-full border px-2 py-1">
    </div>
    <div class="mb-4">
        <label for="phone" class="block">Phone:</label>
        <input type="text" name="phone" value="{{ $member->phone }}" class="w-full border px-2 py-1">
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
