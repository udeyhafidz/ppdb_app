<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online | SD Negeri Modern</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0f172a;
        }

        /* Menambahkan sedikit efek blur pada teks saat di-hover agar terasa seperti neon lembut */
        nav a:hover {
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.2);
        }

        .glass-nav {
            background: rgba(37, 99, 235, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        /* Animasi Judul yang Elegan */
        @keyframes titleReveal {
            0% {
                opacity: 0;
                transform: translateY(40px);
                filter: blur(15px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
                filter: blur(0);
            }
        }

        .animate-title-reveal {
            animation: titleReveal 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.6s forwards;
        }

        .animate-fade-in-up-delayed {
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.9s forwards;
        }

        .animate-fade-in {
            animation: fadeInUp 1s ease-out forwards;
        }

        /* Animasi Dasar yang Sudah Ada (Tetap Dipertahankan) */
        @keyframes titleReveal {
            0% {
                opacity: 0;
                transform: translateY(40px) rotateX(-20deg);
                filter: blur(15px);
            }

            100% {
                opacity: 1;
                transform: translateY(0) rotateX(0);
                filter: blur(0);
            }
        }

        .animate-title-reveal {
            perspective: 1000px;
            animation: titleReveal 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out 0.6s forwards;
            opacity: 0;
        }

        .animate-fade-in {
            animation: fadeInUp 1s ease-out forwards;
        }

        /* Efek Tambahan: Smooth Transition untuk semua elemen */
        * {
            backface-visibility: hidden;
            -webkit-font-smoothing: antialiased;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-[#f8fafc] text-slate-800 flex flex-col min-h-screen">

    <nav class="glass-nav sticky top-0 z-50 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-10 h-10 bg-yellow-400 rounded-xl flex items-center justify-center shadow-lg shadow-yellow-500/30">
                        <span class="text-blue-700 font-extrabold text-xl">S</span>
                    </div>
                    <div>
                        <h1 class="text-white font-extrabold text-xl tracking-tight leading-none">PPDB ONLINE</h1>
                        <p class="text-blue-100 text-[10px] tracking-widest uppercase mt-1">SD Negeri Unggulan</p>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-8 text-sm font-semibold">

                    <nav class="flex items-center gap-6">
                        <!-- Beranda -->
                        <a href="/"
                            class="group relative py-2 text-white font-bold tracking-wide transition-all duration-300 active:scale-90">
                            <span class="relative z-10 flex items-center gap-2">
                                <svg class="w-4 h-4 transition-transform group-hover:-translate-y-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                Beranda
                            </span>
                            <span
                                class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-400 shadow-[0_0_10px_rgba(96,165,250,0.8)] rounded-full"></span>
                        </a>

                        <!-- Jadwal -->
                        <a href="/jadwal"
                            class="group relative py-2 text-slate-300 hover:text-white font-medium tracking-wide transition-all duration-300 active:scale-90">
                            <span class="relative z-10 flex items-center gap-2">
                                <svg class="w-4 h-4 opacity-70 group-hover:opacity-100 group-hover:rotate-12 transition-all"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Jadwal
                            </span>
                            <span
                                class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-full group-hover:left-0 shadow-[0_0_15px_rgba(59,130,246,0.6)] rounded-full transition-all duration-300 ease-out"></span>
                        </a>

                        <!-- Pengumuman -->
                        <a href="/pengumuman"
                            class="group relative py-2 text-slate-300 hover:text-white font-medium tracking-wide transition-all duration-300 active:scale-90">
                            <span class="relative z-10 flex items-center gap-2">
                                <svg class="w-4 h-4 opacity-70 group-hover:opacity-100 group-hover:animate-bounce transition-all"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                    </path>
                                </svg>
                                Pengumuman
                            </span>
                            <span
                                class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-full group-hover:left-0 shadow-[0_0_15px_rgba(59,130,246,0.6)] rounded-full transition-all duration-300 ease-out"></span>
                            <span
                                class="absolute -top-1 -right-1 w-2 h-2 bg-blue-400 rounded-full opacity-0 group-hover:opacity-100 animate-ping"></span>
                        </a>

                        <!-- Statistik -->
                        <a href="/statistik"
                            class="group relative py-2 text-slate-300 hover:text-white font-medium tracking-wide transition-all duration-300 active:scale-90">
                            <span class="relative z-10 flex items-center gap-1.5">
                                <svg class="w-4 h-4 opacity-70 group-hover:opacity-100 group-hover:scale-110 transition-all"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                Statistik
                            </span>
                            <span
                                class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-full group-hover:left-0 shadow-[0_0_15px_rgba(59,130,246,0.6)] rounded-full transition-all duration-300 ease-out"></span>
                        </a>
                    </nav>

                    <div class="h-6 w-[1px] bg-white/20 mx-2"></div>

                    @auth
                        <div class="relative group">
                            <button
                                class="flex items-center space-x-3 bg-white/10 hover:bg-white/20 text-white pl-2 pr-4 py-1.5 rounded-full border border-white/20 transition-all">
                                <div
                                    class="w-8 h-8 bg-gradient-to-tr from-yellow-400 to-orange-400 text-blue-900 flex items-center justify-center rounded-full font-bold shadow-inner">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                </div>
                                <span>{{ auth()->user()->name }}</span>
                                <svg class="w-4 h-4 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div
                                class="absolute right-0 mt-3 w-48 bg-white rounded-2xl shadow-xl py-2 hidden group-hover:block border border-slate-100 animate-in fade-in slide-in-from-top-2">
                                <a href="/profile"
                                    class="flex items-center px-4 py-3 text-slate-600 hover:bg-slate-50 transition">
                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                    Profil Saya
                                </a>
                                <div class="border-t border-slate-100 my-1"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center w-full px-4 py-3 text-red-500 hover:bg-red-50 transition font-medium">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('login') }}"
                                class="text-white hover:text-yellow-300 px-4 py-2 transition font-semibold">Masuk</a>
                            <a href="{{ route('register') }}"
                                class="bg-yellow-400 hover:bg-yellow-500 text-blue-900 px-6 py-2.5 rounded-full font-bold shadow-lg shadow-yellow-500/30 transition-all hover:-translate-y-0.5 active:translate-y-0">
                                Daftar Sekarang
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="relative max-w-5xl mx-auto text-center px-6 py-24 overflow-hidden">
        <div
            class="absolute -top-24 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-blue-500/10 rounded-full blur-[120px] pointer-events-none">
        </div>

        <div class="relative z-10">
            <div class="relative z-10 group/hero">
                <!-- Badge dengan efek Glow saat Hover -->
                <div
                    class="inline-flex items-center gap-3 px-5 py-2 mb-10 bg-slate-800/40 border border-slate-700/50 rounded-full backdrop-blur-md animate-fade-in hover:bg-blue-500/20 hover:border-blue-400/50 hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-500 cursor-default group">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    <span
                        class="text-blue-200/80 text-[10px] font-black uppercase tracking-[0.3em] group-hover:text-blue-100 transition-colors">
                        Tahun Ajaran 2026 / 2027
                    </span>
                </div>

                <!-- Judul dengan efek 3D Lift & Text Glow -->
                <h1
                    class="text-5xl md:text-8xl font-black text-white mb-8 tracking-tighter leading-[0.95] animate-title-reveal cursor-default transition-all duration-700 hover:tracking-normal hover:scale-[1.02] active:scale-[0.98]">
                    <span
                        class="block hover:text-blue-100 transition-all duration-500 hover:drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">Masa
                        Depan</span>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-b from-blue-100 to-blue-400/80 drop-shadow-sm hover:drop-shadow-[0_0_30px_rgba(96,165,250,0.5)] transition-all duration-500">
                        Dimulai di Sini.
                    </span>
                </h1>

                <!-- Deskripsi dengan efek Glass Reveal -->
                <p
                    class="text-slate-300/80 text-lg md:text-xl max-w-2xl mx-auto mb-14 leading-relaxed font-medium animate-fade-in-up hover:text-slate-100 transition-all duration-500 cursor-default p-4 rounded-3xl hover:bg-white/5 hover:backdrop-blur-sm border border-transparent hover:border-white/10">
                    Penerimaan Peserta Didik Baru <span
                        class="text-blue-300 group-hover/hero:text-blue-400 transition-colors duration-700">SD
                        Negeri</span>.
                    Sistem pendaftaran online yang efisien, transparan, dan terpercaya.
                </p>
            </div>

            @guest
                <div class="flex flex-col md:flex-row justify-center items-center gap-5 animate-fade-in-up-delayed">
                    <a href="/register"
                        class="group relative w-full md:w-auto px-10 py-5 bg-blue-600 hover:bg-blue-500 text-white rounded-2xl font-black text-lg shadow-lg shadow-blue-900/20 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center gap-3">
                            Mulai Pendaftaran
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                        </div>
                    </a>

                    <a href="/panduan"
                        class="w-full md:w-auto px-10 py-5 bg-transparent text-slate-300 rounded-2xl font-bold border border-slate-700 hover:bg-slate-800/50 hover:text-white transition-all duration-500">
                        Lihat Panduan
                    </a>
                </div>
            @endguest
        </div>
    </div>

    <main class="flex-grow -mt-20 relative z-10">
        <div class="max-w-7xl mx-auto px-6 pb-20">
            <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/60 p-8 md:p-12 min-h-[400px]">
                {{ $slot }}
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-slate-100 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center text-center md:text-left">
                <div>
                    <h2 class="text-slate-900 font-bold text-lg">PPDB SD Negeri</h2>
                    <p class="text-slate-500 mt-2">Mencetak generasi cerdas, berakhlak mulia, dan kompetitif.</p>
                </div>
                <div class="text-slate-400 text-sm md:text-right">
                    © {{ date('Y') }} — Hak Cipta Dilindungi. <br class="md:hidden">
                    Dikelola oleh Dinas Pendidikan.
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
