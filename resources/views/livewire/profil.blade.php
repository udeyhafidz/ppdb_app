<div class="min-h-screen bg-slate-50/50 py-12 px-4 sm:px-6 relative overflow-hidden flex items-center justify-center">

    <!-- Dynamic Ambient Background -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-[10%] -left-[10%] w-[50vw] h-[50vw] rounded-full bg-gradient-to-br from-blue-400/20 to-cyan-300/20 blur-[100px] animate-blob">
        </div>
        <div
            class="absolute top-[20%] -right-[10%] w-[40vw] h-[40vw] rounded-full bg-gradient-to-bl from-indigo-500/20 to-purple-400/20 blur-[120px] animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute -bottom-[20%] left-[20%] w-[60vw] h-[60vw] rounded-full bg-gradient-to-tr from-blue-600/10 to-teal-400/10 blur-[130px] animate-blob animation-delay-4000">
        </div>
        <!-- Grid Pattern Overlay -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgwLCAwLCAwLCAwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] z-0">
        </div>
    </div>

    <!-- Main Container (Lebih Lebar: max-w-4xl) -->
    <div class="max-w-4xl w-full mx-auto relative z-10 animate-fade-up">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center gap-6 mb-10 group">
            <div
                class="w-16 h-16 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-[1.5rem] flex items-center justify-center shadow-2xl shadow-blue-500/30 group-hover:rotate-6 group-hover:scale-105 transition-all duration-500 shrink-0">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-800 tracking-tight leading-tight">
                    Pengaturan <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Profil</span>
                </h2>
                <p class="text-slate-500 font-medium mt-1 text-lg">Kelola identitas digital dan keamanan akun Anda.</p>
            </div>
        </div>

        <!-- Alert Success Premium -->
        @if (session()->has('success'))
            <div
                class="mb-8 flex items-center bg-white/60 backdrop-blur-md border border-emerald-200 text-emerald-800 px-6 py-4 rounded-2xl shadow-xl shadow-emerald-200/40 animate-bounce-in">
                <div
                    class="bg-gradient-to-br from-emerald-400 to-emerald-600 p-2 rounded-xl mr-4 shadow-lg shadow-emerald-300">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-black text-sm tracking-wide text-emerald-900 uppercase">Berhasil Diperbarui</h4>
                    <span class="font-medium text-sm text-emerald-700">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <!-- Main Glassmorphism Card -->
        <div
            class="bg-white/70 backdrop-blur-2xl shadow-[0_20px_80px_-15px_rgba(0,0,0,0.1)] rounded-[2.5rem] border border-white overflow-hidden transition-all duration-500 hover:shadow-[0_20px_80px_-15px_rgba(59,130,246,0.15)] ring-1 ring-slate-900/5">

            <form wire:submit.prevent="updateProfile" class="p-8 md:p-12">

                <!-- 2-Column Grid Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                    <!-- Kiri: Informasi Akun -->
                    <div class="space-y-6">
                        <div class="flex items-center gap-3 mb-8">
                            <div
                                class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-slate-800">Informasi Dasar
                            </h3>
                            <span class="h-px flex-1 bg-gradient-to-r from-slate-200 to-transparent"></span>
                        </div>

                        <!-- Input Nama -->
                        <div class="group space-y-2">
                            <label
                                class="text-xs font-bold text-slate-500 uppercase tracking-widest ml-1 group-focus-within:text-blue-600 transition-colors">Nama
                                Lengkap</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" wire:model="name" placeholder="Masukkan nama Anda"
                                    class="w-full bg-white/50 backdrop-blur-sm border border-slate-200 rounded-2xl pl-12 pr-5 py-4 focus:ring-4 focus:ring-blue-500/10 focus:bg-white focus:border-blue-500 outline-none transition-all duration-300 placeholder:text-slate-400 font-semibold text-slate-800 shadow-sm">
                            </div>
                            @error('name')
                                <span
                                    class="flex items-center gap-1.5 text-rose-500 text-[11px] font-bold mt-1.5 ml-1 animate-shake">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!-- Input Email -->
                        <div class="group space-y-2">
                            <label
                                class="text-xs font-bold text-slate-500 uppercase tracking-widest ml-1 group-focus-within:text-blue-600 transition-colors">Alamat
                                Email</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-blue-500 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="email" wire:model="email" placeholder="nama@email.com"
                                    class="w-full bg-white/50 backdrop-blur-sm border border-slate-200 rounded-2xl pl-12 pr-5 py-4 focus:ring-4 focus:ring-blue-500/10 focus:bg-white focus:border-blue-500 outline-none transition-all duration-300 placeholder:text-slate-400 font-semibold text-slate-800 shadow-sm">
                            </div>
                            @error('email')
                                <span
                                    class="flex items-center gap-1.5 text-rose-500 text-[11px] font-bold mt-1.5 ml-1 animate-shake">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Kanan: Keamanan & Password -->
                    <div class="space-y-6">
                        <div class="flex items-center gap-3 mb-8">
                            <div
                                class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-slate-800">Ubah Password</h3>
                            <span class="h-px flex-1 bg-gradient-to-r from-slate-200 to-transparent"></span>
                            <span
                                class="text-[9px] font-black text-indigo-600 bg-indigo-100 px-2 py-1 rounded-full uppercase">Opsional</span>
                        </div>

                        <!-- Input Password Baru -->
                        <div class="group space-y-2">
                            <label
                                class="text-xs font-bold text-slate-500 uppercase tracking-widest ml-1 group-focus-within:text-indigo-600 transition-colors">Password
                                Baru</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-indigo-500 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="password" wire:model="password"
                                    placeholder="Kosongkan jika tidak diubah"
                                    class="w-full bg-white/50 backdrop-blur-sm border border-slate-200 rounded-2xl pl-12 pr-5 py-4 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all duration-300 font-semibold text-slate-800 shadow-sm placeholder:text-slate-400">
                            </div>
                            @error('password')
                                <span
                                    class="flex items-center gap-1.5 text-rose-500 text-[11px] font-bold mt-1.5 ml-1 animate-shake">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!-- Input Konfirmasi Password -->
                        <div class="group space-y-2">
                            <label
                                class="text-xs font-bold text-slate-500 uppercase tracking-widest ml-1 group-focus-within:text-indigo-600 transition-colors">Konfirmasi
                                Password</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-indigo-500 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="password" wire:model="password_confirmation"
                                    placeholder="Ulangi password baru"
                                    class="w-full bg-white/50 backdrop-blur-sm border border-slate-200 rounded-2xl pl-12 pr-5 py-4 focus:ring-4 focus:ring-indigo-500/10 focus:bg-white focus:border-indigo-500 outline-none transition-all duration-300 font-semibold text-slate-800 shadow-sm placeholder:text-slate-400">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div
                    class="mt-12 pt-8 border-t border-slate-100 flex flex-col-reverse sm:flex-row items-center justify-end gap-4">
                    <a href="/"
                        class="w-full sm:w-auto bg-white hover:bg-slate-50 text-slate-500 px-8 py-4 rounded-[1.25rem] font-bold transition-all duration-300 text-center border border-slate-200 hover:border-slate-300 active:scale-95 hover:text-slate-700">
                        Kembali
                    </a>
                    <button type="submit"
                        class="group relative w-full sm:w-auto overflow-hidden bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-10 py-4 rounded-[1.25rem] font-black shadow-[0_10px_30px_-10px_rgba(79,70,229,0.5)] hover:shadow-[0_20px_40px_-10px_rgba(79,70,229,0.7)] transition-all duration-300 hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3">
                        <span class="relative z-10 flex items-center gap-2">
                            <svg class="w-5 h-5 group-hover:animate-bounce" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Simpan Perubahan
                        </span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-in-out">
                        </div>
                    </button>
                </div>
            </form>
        </div>

        <!-- Security Tips Footer (Premium Dark Card) -->
        <div
            class="mt-8 p-8 bg-gradient-to-br from-[#0f172a] to-[#1e293b] rounded-[2.5rem] shadow-2xl relative overflow-hidden group border border-slate-700/50">
            <!-- Decorative Elements -->
            <div
                class="absolute top-0 right-0 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl group-hover:bg-blue-500/20 transition-colors duration-700">
            </div>
            <div
                class="absolute -bottom-8 -right-8 opacity-[0.03] group-hover:scale-110 transition-transform duration-700 transform rotate-12">
                <svg class="w-48 h-48 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z" />
                </svg>
            </div>

            <div class="relative z-10 flex flex-col sm:flex-row gap-5 items-start sm:items-center">
                <div class="p-4 bg-slate-800/80 rounded-2xl backdrop-blur-md border border-slate-700 shadow-inner">
                    <svg class="w-8 h-8 text-blue-400 drop-shadow-[0_0_8px_rgba(96,165,250,0.5)]" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h4 class="text-sm font-black text-white uppercase tracking-widest mb-1.5">Tips Keamanan Akun</h4>
                    <p class="text-slate-400 text-sm leading-relaxed font-medium max-w-2xl">
                        Pastikan menggunakan <span class="text-blue-400 font-bold">Kombinasi Password Kuat</span>
                        (Huruf besar, angka, dan simbol). Jaga kerahasiaan akun Anda dari pihak manapun untuk
                        menghindari penyalahgunaan data.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Base Entry Animation */
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
    }

    /* Animated Ambient Background Blobs */
    @keyframes blob {

        0%,
        100% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    .animate-blob {
        animation: blob 15s infinite alternate ease-in-out;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    /* Input Error Shake */
    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        20%,
        60% {
            transform: translateX(-4px);
        }

        40%,
        80% {
            transform: translateX(4px);
        }
    }

    .animate-shake {
        animation: shake 0.5s ease-in-out;
    }

    /* Alert Pop In */
    @keyframes bounceIn {
        0% {
            transform: scale(0.9) translateY(-10px);
            opacity: 0;
        }

        60% {
            transform: scale(1.02) translateY(2px);
            opacity: 1;
        }

        100% {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
    }

    .animate-bounce-in {
        animation: bounceIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }
</style>
