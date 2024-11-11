<!-- resources/views/members/index.blade.php -->
@extends('layout')

@section('title', 'Daftar Anggota')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Anggota</h1>
<a href="{{ route('members.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Anggota</a>
<table class="table-auto w-full mt-4">
    <thead>
        <tr>
            <th class="px-4 py-2">Nama</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Phone</th>
            <th class="px-4 py-2">Role</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
            <tr>
                <td class="border px-4 py-2">{{ $member->name }}</td>
                <td class="border px-4 py-2">{{ $member->email }}</td>
                <td class="border px-4 py-2">{{ $member->phone }}</td>
                <td class="border px-4 py-2">{{ ucfirst($member->role) }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('members.edit', $member->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
