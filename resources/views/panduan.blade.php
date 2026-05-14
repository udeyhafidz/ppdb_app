<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alur Pendaftaran PPDB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        /* Menggunakan Plus Jakarta Sans untuk kesan modern, soft, dan friendly */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FAFAFA;
        }

        /* Animasi masuk berurutan */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-500 {
            animation-delay: 0.5s;
        }

        .delay-600 {
            animation-delay: 0.6s;
        }

        .delay-700 {
            animation-delay: 0.8s;
        }

        /* Garis timeline dengan warna soft gradient */
        .timeline-line {
            background: linear-gradient(to bottom, #bae6fd 0%, #c4b5fd 30%, #fde047 60%, #a7f3d0 100%);
        }

        /* Animasi kartu akhir (Success) */
        @keyframes softPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.2);
            }

            70% {
                box-shadow: 0 0 0 20px rgba(16, 185, 129, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }

        .animate-soft-pulse {
            animation: softPulse 2.5s infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>

<body class="text-slate-700 antialiased relative overflow-x-hidden">

    <!-- Efek Latar Belakang (Soft Ambient Glow) -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[50rem] h-[50rem] bg-sky-100/50 rounded-full blur-[120px]"></div>
        <div class="absolute top-[40%] -right-[10%] w-[40rem] h-[40rem] bg-indigo-100/40 rounded-full blur-[100px]">
        </div>
        <div class="absolute -bottom-[10%] left-[20%] w-[50rem] h-[50rem] bg-emerald-100/40 rounded-full blur-[120px]">
        </div>
    </div>

    <!-- Main Container -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 py-16 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 animate-fade-up">
            <span
                class="text-sky-600 font-bold tracking-widest text-xs uppercase bg-sky-50 border border-sky-100 px-4 py-2 rounded-full mb-6 inline-block">Panduan
                Interaktif</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 tracking-tight mt-4 mb-4">
                Alur <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-sky-500 to-indigo-500">Pendaftaran</span>
            </h1>
            <p class="text-slate-500 text-base md:text-lg font-medium leading-relaxed">
                Ikuti 6 langkah mudah berikut untuk mendaftarkan putra-putri Anda. Sistem kami dirancang untuk
                memberikan kenyamanan maksimal.
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="relative max-w-3xl mx-auto">

            <!-- Garis Vertikal Timeline (Hidden on mobile) -->
            <div
                class="absolute left-[2.25rem] md:left-[3.25rem] top-10 bottom-10 w-1.5 timeline-line rounded-full hidden sm:block opacity-60">
            </div>

            <div class="space-y-8 md:space-y-12">

                <!-- STEP 1: Registrasi -->
                <div class="relative flex items-start group animate-fade-up delay-100">
                    <div class="absolute left-[2.25rem] w-1 h-full bg-slate-100 sm:hidden"></div>

                    <div
                        class="relative z-10 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-white text-slate-400 font-black text-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border-2 border-slate-100 shrink-0 transform group-hover:scale-110 group-hover:border-slate-300 group-hover:text-slate-600 transition-all duration-300 sm:mx-0 mx-auto">
                        01
                    </div>

                    <div class="ml-6 sm:ml-10 w-full mt-1 md:mt-0">
                        <div
                            class="bg-white p-6 md:p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100/80 group-hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-800 mb-2">Buat Akun Pendaftar</h3>
                            <p class="text-slate-500 font-medium leading-relaxed">
                                Mulai langkah pertama dengan membuat akun menggunakan email aktif Anda. Jika sudah
                                memiliki akun, Anda dapat langsung masuk (login) ke dalam dasbor.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- STEP 2: Isi Formulir -->
                <div class="relative flex items-start group animate-fade-up delay-200">
                    <div class="absolute left-[2.25rem] w-1 h-full bg-slate-100 sm:hidden"></div>

                    <div
                        class="relative z-10 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-sky-50 text-sky-500 font-black text-xl shadow-[0_8px_30px_rgb(14,165,233,0.1)] border-2 border-sky-100 shrink-0 transform group-hover:scale-110 group-hover:bg-sky-500 group-hover:text-white transition-all duration-300 sm:mx-0 mx-auto">
                        02
                    </div>

                    <div class="ml-6 sm:ml-10 w-full mt-1 md:mt-0">
                        <div
                            class="bg-white p-6 md:p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100/80 group-hover:border-sky-200 transition-all duration-300">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-800 mb-2">Lengkapi Biodata</h3>
                            <p class="text-slate-500 font-medium leading-relaxed">
                                Isi formulir pendaftaran yang meliputi data diri calon siswa, alamat, dan data orang
                                tua/wali dengan teliti sesuai dengan dokumen resmi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- STEP 3: Upload Berkas -->
                <div class="relative flex items-start group animate-fade-up delay-300">
                    <div class="absolute left-[2.25rem] w-1 h-full bg-slate-100 sm:hidden"></div>

                    <div
                        class="relative z-10 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-indigo-50 text-indigo-500 font-black text-xl shadow-[0_8px_30px_rgb(99,102,241,0.1)] border-2 border-indigo-100 shrink-0 transform group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white transition-all duration-300 sm:mx-0 mx-auto">
                        03
                    </div>

                    <div class="ml-6 sm:ml-10 w-full mt-1 md:mt-0">
                        <div
                            class="bg-white p-6 md:p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100/80 group-hover:border-indigo-200 transition-all duration-300">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-800 mb-4">Unggah Berkas Persyaratan</h3>

                            <!-- Soft Alert Box -->
                            <div
                                class="bg-indigo-50/50 border border-indigo-100 rounded-2xl p-4 flex items-start gap-3 mb-4">
                                <svg class="w-6 h-6 text-indigo-400 shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-indigo-800/80 text-sm md:text-base font-semibold leading-relaxed">
                                    "Tolong upload berkasnya sesuai dengan format dan persyaratan yang tertera di
                                    tampilan layar Anda."
                                </p>
                            </div>

                            <p class="text-slate-500 font-medium leading-relaxed mb-4">Dokumen dasar yang perlu
                                disiapkan:</p>

                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1.5 bg-slate-50 border border-slate-100 rounded-lg text-xs font-bold text-slate-600">Kartu
                                    Keluarga</span>
                                <span
                                    class="px-3 py-1.5 bg-slate-50 border border-slate-100 rounded-lg text-xs font-bold text-slate-600">Akta
                                    Kelahiran</span>
                                <span
                                    class="px-3 py-1.5 bg-slate-50 border border-slate-100 rounded-lg text-xs font-bold text-slate-600">KTP
                                    Orang Tua</span>
                                <span
                                    class="px-3 py-1.5 bg-slate-50 border border-slate-100 rounded-lg text-xs font-bold text-slate-600">Pas
                                    Foto</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STEP 4: Verifikasi Admin -->
                <div class="relative flex items-start group animate-fade-up delay-400">
                    <div class="absolute left-[2.25rem] w-1 h-full bg-slate-100 sm:hidden"></div>

                    <div
                        class="relative z-10 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-amber-50 text-amber-500 font-black text-xl shadow-[0_8px_30px_rgb(245,158,11,0.1)] border-2 border-amber-100 shrink-0 transform group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white transition-all duration-300 sm:mx-0 mx-auto">
                        04
                    </div>

                    <div class="ml-6 sm:ml-10 w-full mt-1 md:mt-0">
                        <div
                            class="bg-white p-6 md:p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100/80 group-hover:border-amber-200 transition-all duration-300">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-800 mb-2">Verifikasi Oleh Admin</h3>
                            <p class="text-slate-500 font-medium leading-relaxed">
                                Mohon bersabar. Tim panitia kami sedang memverifikasi keabsahan data dan dokumen Anda.
                                Pantau terus status pendaftaran melalui dasbor akun Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- STEP 5: Daftar Ulang -->
                <div class="relative flex items-start group animate-fade-up delay-500">
                    <div class="absolute left-[2.25rem] w-1 h-full bg-slate-100 sm:hidden"></div>

                    <div
                        class="relative z-10 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-rose-50 text-rose-500 font-black text-xl shadow-[0_8px_30px_rgb(244,63,94,0.1)] border-2 border-rose-100 shrink-0 transform group-hover:scale-110 group-hover:bg-rose-500 group-hover:text-white transition-all duration-300 sm:mx-0 mx-auto">
                        05
                    </div>

                    <div class="ml-6 sm:ml-10 w-full mt-1 md:mt-0">
                        <div
                            class="bg-white p-6 md:p-8 rounded-[2rem] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100/80 group-hover:border-rose-200 transition-all duration-300">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-800 mb-4">Proses Daftar Ulang</h3>
                            <p class="text-slate-500 font-medium leading-relaxed mb-4">
                                Setelah berkas disetujui dan dinyatakan lolos seleksi, Anda diwajibkan untuk melakukan
                                tahap daftar ulang.
                            </p>

                            <!-- Soft Alert Box -->
                            <div class="bg-rose-50/50 border border-rose-100 rounded-2xl p-4 flex items-start gap-3">
                                <svg class="w-6 h-6 text-rose-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                                </svg>
                                <p class="text-rose-800/80 text-sm md:text-base font-semibold leading-relaxed">
                                    "Tolong upload berkas tambahan daftar ulang sesuai dengan yang tertera di tampilan
                                    dasbor Anda."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STEP 6: SUCCESS WOW FACTOR -->
                <div class="relative flex items-start group animate-fade-up delay-600">
                    <div
                        class="relative z-10 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 rounded-2xl bg-emerald-500 text-white font-black text-xl shadow-[0_0_20px_rgb(16,185,129,0.4)] shrink-0 animate-soft-pulse sm:mx-0 mx-auto z-20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </div>

                    <div class="ml-6 sm:ml-10 w-full mt-1 md:mt-0 relative">
                        <!-- Decorative background -->
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-teal-400 rounded-[2.2rem] blur opacity-20 group-hover:opacity-40 transition duration-500">
                        </div>

                        <div
                            class="relative bg-gradient-to-br from-emerald-50 to-teal-50/30 p-8 md:p-10 rounded-[2rem] border border-emerald-100/60 shadow-xl overflow-hidden animate-float">

                            <!-- Ornamen Confetti (Bintang) -->
                            <div class="absolute top-4 right-6 text-2xl opacity-50">✨</div>
                            <div class="absolute bottom-6 left-6 text-2xl opacity-50">🎉</div>

                            <h3 class="text-2xl md:text-3xl font-extrabold text-emerald-800 mb-3 tracking-tight">
                                Selesai!</h3>

                            <div
                                class="bg-white/60 backdrop-blur-sm rounded-2xl p-5 border border-emerald-100 inline-block mt-2">
                                <p class="text-emerald-700 text-lg md:text-xl font-bold leading-relaxed">
                                    "Selamat! Anak Anda sudah resmi terdaftar di sekolah kami."
                                </p>
                            </div>

                            <p class="text-emerald-600/80 font-medium mt-4 text-sm">
                                Anda kini dapat mengunduh bukti cetak pendaftaran di dasbor siswa.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Tombol Aksi di Bawah -->
        <div class="mt-24 flex justify-center animate-fade-up delay-700">
            <a href="{{ route('home') }}"
                class="group relative inline-flex items-center justify-center px-10 py-4 font-bold text-slate-600 bg-white border-2 border-slate-200 rounded-[1.25rem] hover:border-sky-300 hover:text-sky-600 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Beranda Utama
                </span>
            </a>
        </div>

    </div>
</body>

</html>
