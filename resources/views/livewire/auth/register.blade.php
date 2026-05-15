<div class="min-h-screen flex items-center justify-center bg-[#0B1120] px-4 py-12 relative overflow-hidden">

    <!-- Premium Animated Background -->
    <div class="absolute inset-0 z-0">
        <!-- Grid Pattern -->
        <div
            class="absolute inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:40px_40px] mix-blend-overlay">
        </div>

        <!-- Glowing Orbs -->
        <div
            class="absolute top-0 -left-20 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] animate-float pointer-events-none mix-blend-screen">
        </div>
        <div
            class="absolute bottom-0 -right-20 w-[500px] h-[500px] bg-indigo-600/20 rounded-full blur-[120px] animate-float-delayed pointer-events-none mix-blend-screen">
        </div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-cyan-500/10 rounded-full blur-[150px] pointer-events-none">
        </div>
    </div>

    <!-- Main Container -->
    <div class="relative w-full max-w-[500px] z-10 animate-fade-in-up">

        <!-- Header Section -->
        <div class="text-center mb-10">
            <div class="relative inline-flex items-center justify-center w-28 h-28 mb-8 group cursor-default">
                <!-- Glowing effect behind icon -->
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-blue-500 to-indigo-500 rounded-[2.5rem] blur-xl group-hover:blur-2xl opacity-50 transition-all duration-700 animate-pulse-slow">
                </div>
                <!-- Icon Box -->
                <div
                    class="relative w-24 h-24 bg-slate-900/90 backdrop-blur-xl border border-slate-700/50 rounded-[2.5rem] shadow-2xl flex items-center justify-center transition-all duration-500 group-hover:scale-105 group-hover:-rotate-3 group-hover:border-blue-500/50">
                    <svg class="w-12 h-12 text-blue-400 drop-shadow-[0_0_15px_rgba(96,165,250,0.6)]" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                        </path>
                    </svg>
                </div>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-white tracking-tight leading-tight mb-2">
                Buat <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-cyan-400 drop-shadow-sm">Akun</span>
            </h2>
            <p class="text-slate-400 text-base md:text-lg font-medium">
                Langkah awal menuju masa depan gemilang.
            </p>
        </div>

        <!-- Premium Glassmorphism Card -->
        <div
            class="bg-slate-900/50 backdrop-blur-2xl rounded-[3rem] shadow-[0_20px_60px_-15px_rgba(0,0,0,0.5)] border border-slate-700/50 p-8 md:p-12 relative overflow-hidden group/card transition-all duration-500 hover:border-slate-600/60 hover:shadow-[0_20px_60px_-15px_rgba(30,58,138,0.2)]">

            <!-- Sleek Top Border Highlight -->
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-[2px] bg-gradient-to-r from-transparent via-blue-500/80 to-transparent opacity-50 group-hover/card:opacity-100 transition-opacity duration-500">
            </div>

            <!-- Global Error Message -->
            @if (session()->has('error'))
                <div
                    class="mb-8 flex items-start bg-rose-500/10 border border-rose-500/30 text-rose-400 px-5 py-4 rounded-2xl animate-shake shadow-lg shadow-rose-900/20">
                    <svg class="w-6 h-6 mr-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-sm font-semibold leading-relaxed">{{ session('error') }}</span>
                </div>
            @endif

            <!-- Form -->
            <form wire:submit.prevent="verifikasiOtp" class="space-y-5 relative z-20">

                <!-- Nama Input -->
                <div class="space-y-2" style="animation: slideIn 0.5s ease-out 0.1s both;">
                    <label class="text-xs font-bold uppercase tracking-[0.15em] text-slate-400 ml-1">Nama
                        Lengkap</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <input type="text" wire:model="name" placeholder="Sesuai Ijazah/Akta"
                            class="w-full bg-slate-950/60 border border-slate-700/60 rounded-2xl pl-14 pr-5 py-4 text-base outline-none transition-all duration-300 focus:bg-slate-900 focus:border-blue-500/60 focus:ring-4 focus:ring-blue-500/20 text-slate-100 font-medium placeholder:text-slate-600 shadow-inner">
                    </div>
                    @error('name')
                        <div
                            class="flex items-center gap-1.5 text-rose-400 text-sm font-semibold mt-1.5 ml-1 animate-fade-in">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Email Input -->
                <div class="space-y-2" style="animation: slideIn 0.5s ease-out 0.2s both;">
                    <label class="text-xs font-bold uppercase tracking-[0.15em] text-slate-400 ml-1">Alamat
                        Email</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206">
                                </path>
                            </svg>
                        </div>
                        <input type="email" wire:model="email" placeholder="contoh@email.com"
                            class="w-full bg-slate-950/60 border border-slate-700/60 rounded-2xl pl-14 pr-5 py-4 text-base outline-none transition-all duration-300 focus:bg-slate-900 focus:border-blue-500/60 focus:ring-4 focus:ring-blue-500/20 text-slate-100 font-medium placeholder:text-slate-600 shadow-inner">
                    </div>
                    @error('email')
                        <div
                            class="flex items-center gap-1.5 text-rose-400 text-sm font-semibold mt-1.5 ml-1 animate-fade-in">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="space-y-2" style="animation: slideIn 0.5s ease-out 0.3s both;">
                    <label class="text-xs font-bold uppercase tracking-[0.15em] text-slate-400 ml-1">Kata Sandi</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                                </path>
                            </svg>
                        </div>
                        <input type="password" wire:model="password" placeholder="Minimal 8 Karakter"
                            class="w-full bg-slate-950/60 border border-slate-700/60 rounded-2xl pl-14 pr-5 py-4 text-base outline-none transition-all duration-300 focus:bg-slate-900 focus:border-blue-500/60 focus:ring-4 focus:ring-blue-500/20 text-slate-100 font-medium placeholder:text-slate-600 shadow-inner">
                    </div>
                    @error('password')
                        <div
                            class="flex items-center gap-1.5 text-rose-400 text-sm font-semibold mt-1.5 ml-1 animate-fade-in">
                            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Konfirmasi Password Input -->
                <div class="space-y-2" style="animation: slideIn 0.5s ease-out 0.4s both;">
                    <label class="text-xs font-bold uppercase tracking-[0.15em] text-slate-400 ml-1">Konfirmasi
                        Sandi</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <input type="password" wire:model="password_confirmation" placeholder="Ulangi Kata Sandi"
                            class="w-full bg-slate-950/60 border border-slate-700/60 rounded-2xl pl-14 pr-5 py-4 text-base outline-none transition-all duration-300 focus:bg-slate-900 focus:border-blue-500/60 focus:ring-4 focus:ring-blue-500/20 text-slate-100 font-medium placeholder:text-slate-600 shadow-inner">
                    </div>
                </div>

                {{-- Tombol Kirim OTP --}}
                <button type="button" 
                        wire:click="kirimOtp"
                        wire:loading.attr="disabled"
                        class="group relative w-full flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-br from-blue-600 to-indigo-700 hover:from-blue-500 hover:to-indigo-600 text-white rounded-2xl font-bold text-lg shadow-[0_10px_20px_-10px_rgba(37,99,235,0.5)] hover:shadow-[0_15px_25px_-5px_rgba(37,99,235,0.4)] transition-all duration-300 active:scale-[0.97] disabled:opacity-80 disabled:cursor-not-allowed overflow-hidden">
                    
                    <!-- Efek Cahaya Berjalan (Shimmer) -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>

                    <!-- State Normal: Ikon & Teks -->
                    <span wire:loading.remove class="flex items-center gap-2">
                        <span>Kirim Kode OTP</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1 group-hover:-rotate-12" 
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </span>

                    <!-- State Loading: Spinner & Teks -->
                    <span wire:loading class="flex items-center gap-3">
                        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>Mengirim...</span>
                    </span>
                </button>

                {{-- Input OTP --}}
                @if ($otpTerkirim)
                    <div class="mt-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Kode OTP
                        </label>
                        <input
                            type="text"
                            wire:model="kodeOtp"
                            maxlength="6"
                            placeholder="Masukkan 6 digit kode OTP"
                            class="w-full border border-gray-300 rounded-lg p-3 text-center text-2xl tracking-[0.5em] font-bold focus:ring-2 focus:ring-blue-500 focus:outline-none">

                        @error('kodeOtp')
                            <div class="mt-3 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg">
                                {{ $message }}
                            </div>
                        @enderror

                        <button
                            type="submit"
                            class="w-full mt-4 bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg font-semibold">
                            Verifikasi & Daftar
                        </button>
                    </div>
                @endif

                {{-- <!-- Submit Button -->
                <button type="submit"
                    class="group w-full bg-gradient-to-r from-blue-600 via-indigo-500 to-blue-600 bg-[length:200%_auto] animate-gradient text-white font-bold py-4 text-lg rounded-2xl shadow-[0_0_20px_rgba(79,70,229,0.4)] hover:shadow-[0_0_30px_rgba(79,70,229,0.6)] transition-all duration-300 hover:-translate-y-1 active:scale-[0.98] mt-10 flex items-center justify-center gap-3 relative overflow-hidden"
                    style="animation: fadeIn 0.8s ease-out 0.5s both;">
                    <span class="relative z-10 tracking-wide">Daftar Akun Sekarang</span>
                    <svg class="w-6 h-6 relative z-10 group-hover:translate-x-1.5 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                    <!-- Shine effect on hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-in-out">
                    </div>
                </button> --}}
            </form>

            <!-- Divider & Login Link -->
            <div class="mt-8 pt-6 border-t border-slate-700/50 text-center relative z-20"
                style="animation: fadeIn 0.8s ease-out 0.6s both;">
                <p class="text-slate-400 text-base">
                    Sudah punya akun?
                    <a href="{{ route('login') }}"
                        class="font-bold text-blue-400 hover:text-blue-300 transition-colors duration-300 relative inline-block group ml-1">
                        Masuk Sekarang
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-10 flex items-center justify-center gap-5" style="animation: fadeIn 0.8s ease-out 0.7s both;">
            <div class="h-[1px] w-16 bg-gradient-to-r from-transparent to-slate-700"></div>
            <span class="text-[11px] font-black text-slate-500 uppercase tracking-[0.25em]">v2026 Secured</span>
            <div class="h-[1px] w-16 bg-gradient-to-l from-transparent to-slate-700"></div>
        </div>
    </div>
</div>

<style>
    /* 1. Animasi Background Melayang */
    @keyframes float {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.15;
        }

        50% {
            transform: translate(-30px, -30px) scale(1.1);
            opacity: 0.3;
        }
    }

    .animate-float {
        animation: float 12s infinite ease-in-out;
    }

    .animate-float-delayed {
        animation: float 15s infinite ease-in-out reverse;
        animation-delay: 2s;
    }

    /* 2. Animasi Shake untuk Alert Error */
    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            transform: translateX(-4px);
        }

        20%,
        40%,
        60%,
        80% {
            transform: translateX(4px);
        }
    }

    .animate-shake {
        animation: shake 0.6s cubic-bezier(.36, .07, .19, .97) both;
    }

    /* 3. Animasi Muncul Halus */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* 4. Animasi Glow Ikon Lambat */
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* 5. Animasi Gradient Tombol Submit */
    @keyframes gradient-xy {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .animate-gradient {
        animation: gradient-xy 3s linear infinite;
    }

    @keyframes shimmer {
        100% { transform: translateX(100%); }
    }

</style>
