<!-- resources/views/activities/index.blade.php -->
@extends('layout')

@section('title', 'Daftar Kegiatan')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Kegiatan</h1>
<a href="{{ route('activities.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Kegiatan</a>
<table class="table-auto w-full mt-4">
    <thead>
        <tr>
            <th class="px-4 py-2">Judul</th>
            <th class="px-4 py-2">Deskripsi</th>
            <th class="px-4 py-2">Tanggal</th>
            <th class="px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($activities as $activity)
            <tr>
                <td class="border px-4 py-2">{{ $activity->title }}</td>
                <td class="border px-4 py-2">{{ $activity->description }}</td>
                <td class="border px-4 py-2">{{ $activity->date }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('activities.edit', $activity->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" class="inline">
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
