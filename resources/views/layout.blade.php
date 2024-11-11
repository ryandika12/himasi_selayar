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

        /* Splash Screen */
    #splash-screen {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    #splash-screen.hidden {
        display: none;
    }

    /* Animasi Fade In */
    .animate__fadeIn {
        animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    </style>
</head>
<!-- Splash Screen -->
<div id="splash-screen" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-80 z-50">
    <div class="text-center text-white">

        <div class="mt-8">
            <div class="animate__animated animate__fadeIn animate__delay-3s">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 mx-auto" />
                <p>#ambattukoroloampakolampa</p>

            </div>
        </div>
    </div>
</div>


<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <header class="bg-hero text-white py-4 shadow-lg">
        <div class="container mx-auto flex flex-wrap justify-between items-center px-6">
            <!-- Logo and Title -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Himpunan Mahasiswa Selayar" class="h-12 w-auto">
                <h1 class="text-3xl font-bold">HM_SELAYAR</h1>
            </div>

            <!-- Menu toggle for mobile -->
            <div class="block lg:hidden">
                <button id="menuToggle" class="text-white focus:outline-none">
                    ☰
                </button>
            </div>

            <!-- Navigation links -->
            <nav id="menuItems" class="hidden lg:flex lg:space-x-4 items-center w-full lg:w-auto mt-4 lg:mt-0">
                <a href="{{ url('/') }}" class="header-link font-medium">Beranda</a>
                <a href="#kegiatan" id="scrollButtonKegiatan" class="header-link font-medium">Kegiatan Kami</a>
                <a href="#kontak" id="scrollButtonKontak" class="bg-yellow-500 text-blue-900 btn-main py-2 px-4 rounded-full font-semibold">Kontak Kami</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="kontak" class="bg-gray-900 text-white py-8 mt-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <p class="text-center md:text-left text-gray-400">&copy; 2024 Himpunan Mahasiswa Selayar. All rights reserved.</p>
            <div class="space-x-4 mt-4 md:mt-0">
                <a href="https://www.instagram.com/hm_selayar?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-gray-400 hover:text-yellow-500">Instagram</a>
                <a href="https://www.youtube.com/@hm_selayar" class="text-gray-400 hover:text-yellow-500">YouTube</a>
                <a href="https://www.tiktok.com/@hm_selayar?is_from_webapp=1&sender_device=pc" class="text-gray-400 hover:text-yellow-500">TikTok</a>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">↑</button>

    <script>
        // Toggle navigation menu on mobile
        document.getElementById('menuToggle').addEventListener('click', function () {
            const menuItems = document.getElementById('menuItems');
            menuItems.classList.toggle('hidden');
        });

        // Smooth scroll for "Kegiatan Kami" button
        document.getElementById('scrollButtonKegiatan').addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector('#kegiatan').scrollIntoView({ behavior: 'smooth', block: 'start' });
        });

        // Smooth scroll for "Kontak Kami" button
        document.getElementById('scrollButtonKontak').addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector('#kontak').scrollIntoView({ behavior: 'smooth', block: 'start' });
        });

        // Show/hide scroll to top button
        window.onscroll = function() {
            const scrollToTopButton = document.getElementById('scrollToTop');
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        };
    </script>
<script>
    // Tunggu beberapa detik untuk menyembunyikan splash screen
    window.onload = () => {
        setTimeout(() => {
            const splashScreen = document.getElementById('splash-screen');
            splashScreen.classList.add('hidden'); // Sembunyikan splash screen
        }, 1200); // Splash screen muncul selama 1.2 detik
    };
</script>
</body>
</html>
