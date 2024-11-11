@extends('layout')

@section('title', 'Profil Himpunan Mahasiswa Selayar')

@section('content')
    <!-- Header Section -->
    <section class="relative bg-gradient-to-r from-blue-600 to-black text-white py-24 px-4 md:px-8 lg:px-12 rounded-b-lg" style="border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
        <div class="absolute  bg-black opacity-40 rounded-b-lg"></div>
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 text-white-500 drop-shadow-lg animate__animated animate__fadeIn">Himpunan Mahasiswa Selayar</h1>
            <p class="text-base sm:text-lg md:text-2xl mb-8 text-white drop-shadow-lg animate__animated animate__fadeIn animate__delay-1s">
                Menjadi wadah bagi mahasiswa untuk meningkatkan potensi dalam bidang IT, berkembang, berkarya, dan berkontribusi dalam pembangunan masyarakat.
            </p>
            <a href="#tentang" id="scrollButton" class="bg-green-500 hover:bg-green-400 text-white text-base sm:text-lg font-semibold py-2 px-6 md:py-3 md:px-8 rounded-full shadow-xl transition-transform duration-100 transform hover:scale-110 animate__animated animate__bounceIn">
                Pelajari Lebih Lanjut
            </a>

        </div>
    </section>

    <!-- Tentang Kami dan Visi-Misi Section -->
    <section id="tentang" class="container mx-auto py-10 px-4 md:px-8 bg-gray-50">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Tentang Kami</h2>
                <br><p class="text-base sm:text-lg text-gray-800">Himpunan Mahasiswa Selayar (HMS) berdiri sejak tahun 2019 merupakan organisasi yang terdiri dari mahasiswa berbagai disiplin ilmu. Organisasi ini bertujuan untuk menjadi jembatan antara mahasiswa dan masyarakat, serta memberikan kontribusi nyata melalui berbagai kegiatan sosial dan edukasi.</p></br>

                <p class="text-base sm:text-lg text-gray-800">Melalui berbagai kegiatan sosial, edukasi, serta pengembangan kepemimpinan, kami berusaha menciptakan lingkungan yang mendukung pengembangan potensi setiap anggotanya. Kami percaya bahwa dengan bersinergi, kami dapat memberikan kontribusi nyata bagi masyarakat, serta memajukan pendidikan dan kesejahteraan bersama.</p>

                <br><p class="text-base sm:text-lg text-gray-800">Sebagai bagian dari komunitas yang peduli, kami terus berupaya mengembangkan diri dan meningkatkan dampak positif terhadap lingkungan sekitar, dengan harapan dapat menjadi contoh bagi generasi penerus yang peduli akan kemajuan bangsa.</p></br>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Visi dan Misi</h2>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-blue-600">Visi</h3>
                    <p class="text-base sm:text-lg text-gray-800">Menjadi organisasi yang mencetak mahasiswa berkompeten dalam ilmu IT dan berbagai disiplin ilmu serta berkarakter demi kemajuan masyarakat Selayar.</p>
                    <h3 class="text-xl font-semibold text-blue-600">Misi</h3>
                    <ul class="list-disc pl-6 text-base sm:text-lg text-gray-800">
                        <li>Meningkatkan kualitas akademik mahasiswa melalui program pelatihan IT dan seminar.</li>
                        <li>Mendorong keterlibatan mahasiswa dalam kegiatan sosial yang bermanfaat.</li>
                        <li>Membangun komunikasi yang baik antar mahasiswa dan pihak terkait untuk meningkatkan kualitas pendidikan di Selayar.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Kegiatan Kami Section -->
    <section id="kegiatan" class="bg-gray-100 py-10 px-4 md:px-8">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-600 mb-4">Kegiatan Kami</h2>
            <p class="text-lg text-gray-800 mb-6">Berikut adalah beberapa kegiatan yang dilakukan oleh Himpunan Mahasiswa Selayar.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Kegiatan 1 -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-200">
                    <div class="relative">
                        <div class="image-slider w-full h-56 sm:h-64 lg:h-72 relative">
                            <img src="{{ asset('images/sosial1.jpg') }}" alt="Kegiatan Sosial 1" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" />
                            <img src="{{ asset('images/sosial2.jpg') }}" alt="Kegiatan Sosial 2" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/sosial3.jpg') }}" alt="Kegiatan Sosial 3" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/sosial4.JPG') }}" alt="Kegiatan Sosial 4" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Kegiatan Sosial di Masyarakat</h3>
                            <p class="text-gray-600">Melakukan kegiatan sosial untuk membantu masyarakat sekitar dengan berbagai program pengabdian.</p>
                        </div>
                    </div>
                </div>

                <!-- Kegiatan 2 -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-200">
                    <div class="relative">
                        <div class="image-slider w-full h-56 sm:h-64 lg:h-72 relative">
                            <img src="{{ asset('images/IT1.jpg') }}" alt="Kegiatan Sosial 1" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100" />
                            <img src="{{ asset('images/1.jpg') }}" alt="Kegiatan Sosial 2" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/3.jpg') }}" alt="Kegiatan Sosial 3" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                            <img src="{{ asset('images/4.JPG') }}" alt="Kegiatan Sosial 4" class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0" />
                        </div>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800">Pembelajaran IT dan disiplin lainnya </h3>
                            <p class="text-gray-600">Menyediakan pendidikan dan pelatihan dalam Teknologi Informasi serta berbagai bidang lainnya untuk mendukung pengembangan keterampilan mahasiswa.</p>
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

   <!-- Tombol Ayo Bergabung -->
<a href="javascript:void(0);" class="join-button fixed right-0 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-pink-500 to-purple-700 text-white font-extrabold py-3 px-6 rounded-full shadow-xl hover:scale-110 hover:rotate-6 hover:shadow-2xl hover:bg-opacity-80 hover:shadow-pink-500 transition-all duration-700 ease-out group lg:text-2xl lg:py-6 lg:px-12 md:text-xl md:py-4 md:px-10 text-sm py-2 px-4" id="joinButton">
    <span class="relative z-10">Ayo Bergabung</span>
    <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-600 opacity-30 rounded-full group-hover:opacity-100 group-hover:animate-pulse"></span>
    <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-600 opacity-20 rounded-full group-hover:opacity-100 animate-ping"></span>
</a>

<script>
    document.getElementById("scrollButton").addEventListener("click", function(event) {
        event.preventDefault(); // Menghindari aksi default link
        const target = document.getElementById("tentang"); // Ambil elemen dengan ID 'tentang'
        target.scrollIntoView({
            behavior: "smooth", // Scroll dengan efek halus
            block: "start" // Mulai dari posisi paling atas elemen
        });
    });
</script>


    <script>
        document.getElementById('joinButton').addEventListener('click', function () {
            window.location.href = '/pendaftaran';
        });
    </script>

    <!-- Kontak Kami Section -->
    <section id="kontak" class="container mx-auto py-10 px-4 md:px-8 text-center bg-gray-50">
        <h2 class="text-3xl font-bold text-blue-600 mb-4">Kontak Kami</h2>
        <p class="text-lg text-gray-800 mb-6">Untuk informasi lebih lanjut atau kerjasama, Anda dapat menghubungi kami melalui media berikut:</p>
        <div class="space-x-4">
            <a href="mailto:info@hms-selayar.com" class="text-blue-600 hover:text-yellow-500">Email: hms-selayar@gmail.com</a>
            <a href="tel:+628123456789" class="text-blue-600 hover:text-yellow-500">Tel: +62 821 9392 2372</a>
        </div>
    </section>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pilih semua elemen dengan class 'image-slider'
        const sliders = document.querySelectorAll('.image-slider');

        // Loop melalui setiap slider untuk membuat efek pergantian gambar
        sliders.forEach(slider => {
            let images = slider.querySelectorAll('img'); // Semua gambar di dalam slider
            let currentIndex = 0; // Gambar awal
            let intervalTime = 3000; // Interval waktu 3 detik

            setInterval(() => {
                // Menyembunyikan semua gambar
                images.forEach((img, index) => {
                    img.style.opacity = (index === currentIndex) ? 1 : 0;
                });

                // Update indeks gambar ke gambar berikutnya
                currentIndex = (currentIndex + 1) % images.length;
            }, intervalTime);
        });
    });
</script>
