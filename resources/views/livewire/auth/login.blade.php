<div class="min-h-screen flex items-center justify-center bg-[#0B1120] px-4 py-12 relative overflow-hidden">

    <!-- Premium Animated Background Background -->
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

    <!-- Main Container (Diperbesar menjadi max-w-[480px]) -->
    <div class="relative w-full max-w-[480px] z-10 animate-fade-in-up">

        <!-- Header Section -->
        <div class="text-center mb-12">
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
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                        </path>
                    </svg>
                </div>
            </div>
            <h2 class="text-5xl md:text-6xl font-black text-white tracking-tight leading-tight mb-2">
                Selamat <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-cyan-400 drop-shadow-sm">Datang</span>
            </h2>
            <p class="text-slate-400 text-base md:text-lg font-medium">
                Silakan masuk untuk melanjutkan PPDB
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
            <form wire:submit="login" class="space-y-6 relative z-20">

                <!-- Email Input (Diperbesar) -->
                <div class="space-y-2" style="animation: slideIn 0.5s ease-out 0.1s both;">
                    <label for="email"
                        class="text-xs font-bold uppercase tracking-[0.15em] text-slate-400 ml-1">Email Siswa</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206">
                                </path>
                            </svg>
                        </div>
                        <input id="email" type="email" wire:model="email" placeholder="nama@email.com"
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

                <!-- Password Input (Diperbesar) -->
                <div class="space-y-2" style="animation: slideIn 0.5s ease-out 0.2s both;">
                    <label for="password" class="text-xs font-bold uppercase tracking-[0.15em] text-slate-400 ml-1">Kata
                        Sandi</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                                </path>
                            </svg>
                        </div>
                        <input id="password" type="password" wire:model="password" placeholder="••••••••"
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

                <!-- Submit Button -->
                <button type="submit"
                    class="group w-full bg-gradient-to-r from-blue-600 via-indigo-500 to-blue-600 bg-[length:200%_auto] animate-gradient text-white font-bold py-4 text-lg rounded-2xl shadow-[0_0_20px_rgba(79,70,229,0.4)] hover:shadow-[0_0_30px_rgba(79,70,229,0.6)] transition-all duration-300 hover:-translate-y-1 active:scale-[0.98] mt-10 flex items-center justify-center gap-3 relative overflow-hidden"
                    style="animation: fadeIn 0.8s ease-out 0.4s both;">
                    <span class="relative z-10 tracking-wide">Masuk ke Dashboard</span>
                    <svg class="w-6 h-6 relative z-10 group-hover:translate-x-1.5 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                    <!-- Shine effect on hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-in-out">
                    </div>
                </button>
            </form>

            <!-- Divider & Register Link -->
            <div class="mt-10 pt-8 border-t border-slate-700/50 text-center relative z-20"
                style="animation: fadeIn 0.8s ease-out 0.5s both;">
                <p class="text-slate-400 text-base">
                    Belum memiliki akun?
                    <a href="{{ route('register') }}"
                        class="font-bold text-blue-400 hover:text-blue-300 transition-colors duration-300 relative inline-block group ml-1">
                        Buat Akun PPDB
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-[2px] bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-10 flex items-center justify-center gap-5" style="animation: fadeIn 0.8s ease-out 0.6s both;">
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
</style>
