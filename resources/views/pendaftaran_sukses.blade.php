@extends('layout')

@section('title', 'Pendaftaran Sukses')

@section('content')
    <section class="bg-green-500 text-white py-16 px-6 sm:py-24 sm:px-8 overflow-hidden">
        <div class="container mx-auto text-center px-4">
            <!-- Judul Responsif -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-6">Pendaftaran Berhasil!</h1>
            <p class="text-base sm:text-lg md:text-xl mb-8">Terima kasih telah bergabung dengan Himpunan Mahasiswa Selayar. Kami akan segera menghubungi Anda untuk langkah selanjutnya.</p>

            <!-- Tombol Kembali ke Beranda -->
            <a href="/" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 px-6 sm:py-4 sm:px-10 rounded-full shadow-xl transition duration-500 mb-6 sm:mb-8 w-full sm:w-auto">
                Kembali ke Beranda
            </a>

            <!-- Link ke Grup WhatsApp -->
            <div class="mt-6 sm:mt-8">
                <p class="text-base sm:text-lg md:text-xl mb-4">Bergabunglah dengan grup WhatsApp kami untuk mendapatkan informasi lebih lanjut:</p>
                <a href="https://chat.whatsapp.com/your-group-link" target="_blank" class="bg-green-600 hover:bg-green-500 text-white font-semibold py-3 px-6 sm:py-4 sm:px-10 md:py-4 md:px-12 rounded-full shadow-xl transition duration-500 w-full sm:w-auto">
                    Join Grup WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
