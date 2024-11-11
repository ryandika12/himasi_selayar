@extends('layout')

@section('title', 'Pendaftaran Sukses')

@section('content')
    <section class="bg-green-500 text-white py-24 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Pendaftaran Berhasil!</h1>
            <p class="text-lg md:text-2xl mb-8">Terima kasih telah bergabung dengan Himpunan Mahasiswa Selayar. Kami akan segera menghubungi Anda untuk langkah selanjutnya.</p>
            <a href="/" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-8 rounded-full shadow-xl transition duration-500">Kembali ke Beranda</a>
        </div>
    </section>
@endsection
