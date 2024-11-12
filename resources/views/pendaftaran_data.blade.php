@extends('layout')

@section('title', 'Data Pendaftaran Calon Anggota')

@section('content')
    <section class="py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold mb-6">Data Pendaftaran Calon Anggota</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b">Nama Lengkap</th>
                            <th class="px-4 py-2 border-b">Kampus</th>
                            <th class="px-4 py-2 border-b">Tanggal Lahir</th>
                            <th class="px-4 py-2 border-b">Alamat Domisili</th>
                            <th class="px-4 py-2 border-b">Nomor WhatsApp</th>
                            <th class="px-4 py-2 border-b">Berketurunan Selayar</th>
                            <th class="px-4 py-2 border-b">Foto</th> <!-- Tambahkan kolom untuk foto -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendaftaran as $item)
    <tr>
        <td class="px-4 py-2 border-b">{{ $item->nama_lengkap }}</td>
        <td class="px-4 py-2 border-b">{{ $item->kampus }}</td>
        <td class="px-4 py-2 border-b">{{ $item->tanggal_lahir }}</td>
        <td class="px-4 py-2 border-b">{{ $item->alamat_domisili }}</td>
        <td class="px-4 py-2 border-b">{{ $item->nomor_whatsapp }}</td>
        <td class="px-4 py-2 border-b">{{ ucfirst($item->berketurunan_selayar) }}</td>
        <td class="px-4 py-2 border-b">
            <td class="px-4 py-2 border-b">
                @if($item->foto)
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto {{ $item->nama_lengkap }}" class="w-16 h-16 object-cover rounded-full">
                @else
                    <span>Tidak ada foto</span>
                @endif
            </td>

    </tr>
@endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
