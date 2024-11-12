@extends('layout')

@section('title', 'Pendaftaran Calon Anggota')

@section('content')
    <section class="bg-gradient-to-r from-blue-600 to-black text-white py-24 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Pendaftaran Calon Anggota</h1>
            <p class="text-lg md:text-2xl text-white mb-8">Isi form di bawah ini untuk bergabung dengan Himpunan Mahasiswa Selayar.</p>

            <!-- Form Pendaftaran -->
            <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data" class="bg-white text-gray-800 p-6 rounded-lg shadow-xl">
                @csrf

                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label for="nama_lengkap" class="block text-lg font-semibold text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Masukkan Nama Lengkap">
                </div>

                <!-- Kampus -->
                <div class="mb-4">
                    <label for="kampus" class="block text-lg font-semibold text-gray-700">Kampus</label>
                    <input type="text" id="kampus" name="kampus" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Masukkan Nama Kampus">
                </div>

                <!-- Tanggal Lahir -->
                <div class="mb-4">
                    <label for="tanggal_lahir" class="block text-lg font-semibold text-gray-700">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <!-- Alamat Domisili -->
                <div class="mb-4">
                    <label for="alamat_domisili" class="block text-lg font-semibold text-gray-700">Alamat Domisili</label>
                    <input type="text" id="alamat_domisili" name="alamat_domisili" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Masukkan Alamat Domisili">
                </div>

                <!-- Nomor WhatsApp -->
                <div class="mb-4">
                    <label for="nomor_whatsapp" class="block text-lg font-semibold text-gray-700">Nomor WhatsApp</label>
                    <input type="text" id="nomor_whatsapp" name="nomor_whatsapp" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Masukkan Nomor WhatsApp">
                </div>

                <!-- Berketurunan Selayar -->
                <div class="mb-4">
                    <label for="berketurunan_selayar" class="block text-lg font-semibold text-gray-700">Apakah Anda Berketurunan Selayar?</label>
                    <select id="berketurunan_selayar" name="berketurunan_selayar" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <option value="ya">Ya</option>
                        <option value="tidak">Tidak</option>
                    </select>
                </div>

                <!-- Upload Foto -->
                <div class="mb-4">
                    <label for="foto" class="block text-lg font-semibold text-gray-700">Upload Foto</label>
                    <input type="file" id="foto" name="foto" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <!-- Submit Button -->
                <div class="mb-4">
                    <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-blue-600 text-white text-xl font-semibold py-3 px-6 rounded-full shadow-lg hover:bg-opacity-80 hover:scale-110 transition duration-300 ease-in-out">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
