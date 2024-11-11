@extends('layout')

@section('title', 'Profil Himpunan Mahasiswa Selayar')

@section('content')
    <!-- Header Section dengan lengkungan di setiap sudut -->
    <section class="relative bg-gradient-to-r from-blue-600 to-black text-white py-24 px-4 rounded-b-lg" style="border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
        <div class="absolute inset- bg-black opacity-40 rounded-b-lg"></div>
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 text-white-500 drop-shadow-lg animate__animated animate__fadeIn">Himpunan Mahasiswa Selayar</h1>
            <p class="text-lg md:text-2xl mb-8 text-white drop-shadow-lg animate__animated animate__fadeIn animate__delay-1s">
                Menjadi wadah bagi mahasiswa untuk meningkatkan potensi dalam bidang IT, berkembang, berkarya, dan berkontribusi dalam pembangunan masyarakat.
            </p>
            <a href="#tentang" id="scrollButton" class="bg-green-500 hover:bg-green-400 text-white-100 text-lg font-semibold py-3 px-8 rounded-full shadow-xl transition-transform duration-100 transform hover:scale-110 animate__animated animate__bounceIn">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </section>

    <!-- Tentang Kami dan Visi-Misi Section -->
    <section id="tentang" class="container mx-auto py-10 px-4 bg-gray-50">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Tentang Kami</h2>
                <p class="text-lg text-gray-800">Himpunan Mahasiswa Selayar (HMS) berdiri sejak tahun 2019 merupakan organisasi yang terdiri dari mahasiswa berbagai disiplin ilmu. Organisasi ini bertujuan untuk menjadi jembatan antara mahasiswa dan masyarakat, serta memberikan kontribusi nyata melalui berbagai kegiatan sosial dan edukasi.</p>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Visi dan Misi</h2>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-blue-600">Visi</h3>
                    <p class="text-lg text-gray-800">Menjadi organisasi yang mencetak mahasiswa berkompeten dan berkarakter demi kemajuan masyarakat Selayar.</p>
                    <h3 class="text-xl font-semibold text-blue-600">Misi</h3>
                    <ul class="list-disc pl-6 text-lg text-gray-800">
                        <li>Meningkatkan kualitas akademik mahasiswa melalui program pelatihan dan seminar.</li>
                        <li>Mendorong keterlibatan mahasiswa dalam kegiatan sosial yang bermanfaat.</li>
                        <li>Membangun komunikasi yang baik antar mahasiswa dan pihak terkait untuk meningkatkan kualitas pendidikan di Selayar.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Kegiatan Kami Section -->
    <section id="kegiatan" class="bg-gray-100 py-10 px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-600 mb-4">Kegiatan Kami</h2>
            <p class="text-lg text-gray-800 mb-6">Berikut adalah beberapa kegiatan yang telah dilakukan oleh Himpunan Mahasiswa Selayar.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Kegiatan Sosial di Masyarakat -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-200">
                    <div class="relative">
                        <!-- Kontainer gambar yang berganti -->
                        <div class="image-slider w-full h-56 relative">
                            <img src="{{ asset('images/ren.jpg') }}" alt="Kegiatan Sosial 1" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" />
                            <img src="{{ asset('images/ren1.jpg') }}" alt="Kegiatan Sosial 2" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/ren2.jpg') }}" alt="Kegiatan Sosial 3" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/ren3.JPG') }}" alt="Kegiatan Sosial 4" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                        </div>
                        <!-- Caption tetap statis -->
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Kegiatan Sosial di Masyarakat</h3>
                            <p class="text-gray-600">Melakukan kegiatan sosial untuk membantu masyarakat sekitar dengan berbagai program pengabdian.</p>
                        </div>
                    </div>
                </div>

                <!-- Kegiatan 2 -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-200">
                    <div class="relative">
                        <!-- Kontainer gambar yang berganti -->
                        <div class="image-slider w-full h-56 relative">
                            <img src="{{ asset('images/2.jpg') }}" alt="Kegiatan Sosial 1" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" />
                            <img src="{{ asset('images/1.jpg') }}" alt="Kegiatan Sosial 2" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/3.jpg') }}" alt="Kegiatan Sosial 3" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/4.JPG') }}" alt="Kegiatan Sosial 4" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                        </div>
                        <!-- Caption tetap statis -->
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Kegiatan Sosial di Masyarakat</h3>
                            <p class="text-gray-600">Melakukan kegiatan sosial untuk membantu masyarakat sekitar dengan berbagai program pengabdian.</p>
                        </div>
                    </div>
                </div>
                <!-- Kegiatan 3 -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <img src="https://via.placeholder.com/400x250" alt="Kegiatan 3" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Pelatihan Kepemimpinan</h3>
                        <p class="text-gray-600">Menyelenggarakan pelatihan kepemimpinan untuk mengembangkan soft skills mahasiswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Tombol Ayo Bergabung dengan navigasi menggunakan JavaScript -->
<!-- Tombol Ayo Bergabung dengan navigasi ke halaman pendaftaran -->
<!-- Tombol Ayo Bergabung dengan navigasi ke halaman pendaftaran -->
<!-- Tombol Ayo Bergabung dengan navigasi menggunakan JavaScript -->
<a href="javascript:void(0);" class="join-button fixed right-0 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-pink-500 to-purple-700 text-white font-extrabold text-2xl py-6 px-12 rounded-full shadow-xl hover:scale-110 hover:rotate-6 hover:shadow-2xl hover:bg-opacity-80 hover:shadow-pink-500 transition-all duration-700 ease-out group" id="joinButton">
    <span class="relative z-10">Ayo Bergabung</span>
    <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-600 opacity-30 rounded-full group-hover:opacity-100 group-hover:animate-pulse"></span>
    <!-- Efek Partikel -->
    <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-600 opacity-20 rounded-full group-hover:opacity-100 animate-ping"></span>
</a>

<script>
    document.getElementById('joinButton').addEventListener('click', function () {
        // Navigasi ke halaman pendaftaran
        window.location.href = '/pendaftaran';
    });
</script>




    <!-- Kontak Kami Section -->
    <section id="kontak" class="container mx-auto py-10 px-4 text-center bg-gray-50">
        <h2 class="text-3xl font-bold text-blue-600 mb-4">Kontak Kami</h2>
        <p class="text-lg text-gray-800 mb-6">Untuk informasi lebih lanjut atau kerjasama, Anda dapat menghubungi kami melalui media berikut:</p>
        <div class="space-x-4">
            <a href="mailto:info@hms-selayar.com" class="text-blue-600 hover:text-yellow-500">Email: info@hms-selayar.com</a>
            <a href="tel:+628123456789" class="text-blue-600 hover:text-yellow-500">Tel: +62 812 3456 789</a>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sliders = document.querySelectorAll('.image-slider');

            sliders.forEach(slider => {
                let images = slider.querySelectorAll('img');
                let currentIndex = 0;

                // Set interval acak untuk tiap slider
                let intervalTime = Math.floor(Math.random() * 3000) + 2000; // 2-5 detik

                setInterval(() => {
                    // Transisi opacity gambar untuk memperlihatkan gambar yang sesuai currentIndex
                    images.forEach((img, index) => {
                        img.style.opacity = index === currentIndex ? 1 : 0;
                    });

                    // Perbarui indeks ke gambar berikutnya
                    currentIndex = (currentIndex + 1) % images.length;
                }, intervalTime); // Pergantian tiap slider dalam interval acak
            });
        });
    </script>



@endsection
