<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informasi Organisasi')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header-link {
            transition: color 0.3s ease;
        }
        .header-link:hover {
            color: #FFD700;
        }
        .bg-hero {
            background: linear-gradient(120deg, #0d47a1, #ffeb3b, #000000);
            background-size: 300% 300%;
            animation: gradient 10s ease infinite;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .btn-main {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .btn-main:hover {
            background-color: #FFD700;
            transform: scale(1.05);
        }

        /* Styling untuk tombol panah ke atas */
        #scrollToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #FFD700;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: none;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        #scrollToTop:hover {
            background-color: #ffab00;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <header class="bg-hero text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Logo and Title -->
            <div class="flex items-center space-x-3">
                <!-- Gambar Logo -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo Himpunan Mahasiswa Selayar" class="h-12 w-auto">
                <!-- Teks Judul -->
                <h1 class="text-3xl font-bold">HIMASI_SELAYAR</h1>
            </div>

            <nav class="space-x-4 flex items-center">
                <a href="{{ url('/') }}" class="header-link font-medium">Beranda</a>
               {{-- <a href="{{ route('activities.index') }}" class="header-link font-medium">Kegiatan</a> --}}
                <a href="#kegiatan" id="scrollButtonKegiatan" class="header-link font-medium">Kegiatan Kami</a>
                {{-- <a href="{{ route('members.index') }}" class="header-link font-medium">Anggota</a>
                <a href="{{ route('attendances.index') }}" class="header-link font-medium">Absensi</a> --}}
                <!-- Kontak Kami Button -->
                <a href="#kontak" id="scrollButtonKontak" class="bg-yellow-500 text-blue-900 btn-main py-2 px-4 rounded-full font-semibold">Kontak Kami</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer with "kontak" ID -->
    <footer id="kontak" class="bg-gray-900 text-white py-8 mt-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <p class="text-center md:text-left text-gray-400">&copy; 2024 Himpunan Mahasiswa Selayar. All rights reserved.</p>
            <div class="space-x-4 mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-yellow-500">Facebook</a>
                <a href="#" class="text-gray-400 hover:text-yellow-500">Twitter</a>
                <a href="#" class="text-gray-400 hover:text-yellow-500">Instagram</a>
            </div>
        </div>
    </footer>

    <!-- Tombol Panah Kembali ke Atas -->
    <button id="scrollToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
        ↑
    </button>

    <script>
        // Scroll ke bagian Kegiatan Kami
        document.getElementById('scrollButtonKegiatan').addEventListener('click', function (e) {
            e.preventDefault(); // Mencegah aksi default dari <a> tag

            // Scroll ke elemen dengan ID 'kegiatan' secara halus
            document.querySelector('#kegiatan').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });

        // Scroll ke bagian Kontak Kami
        document.getElementById('scrollButtonKontak').addEventListener('click', function (e) {
            e.preventDefault(); // Mencegah aksi default dari <a> tag

            // Scroll ke elemen dengan ID 'kontak' secara halus
            document.querySelector('#kontak').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });

        // Menampilkan dan menyembunyikan tombol panah ke atas
        window.onscroll = function() {
            const scrollToTopButton = document.getElementById('scrollToTop');
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollToTopButton.style.display = "block"; // Tampilkan tombol
            } else {
                scrollToTopButton.style.display = "none"; // Sembunyikan tombol
            }
        };
    </script>

</body>
</html>
