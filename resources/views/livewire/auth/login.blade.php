<div
    class="min-h-screen flex items-center justify-center bg-[#0f172a] px-4 py-12 relative overflow-hidden animate-fade-in">

    <!-- Ambient Background Glow -->
    <div
        class="absolute top-0 -left-20 w-96 h-96 bg-blue-500/20 rounded-full blur-[120px] animate-float pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 -right-20 w-96 h-96 bg-indigo-500/20 rounded-full blur-[120px] animate-float-delayed pointer-events-none">
    </div>
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-2xl bg-cyan-500/5 rounded-full blur-[120px] pointer-events-none">
    </div>

    <!-- Subtle Pattern -->
    <div class="absolute inset-0 opacity-[0.015] pointer-events-none mix-blend-overlay"
        style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4z\' fill=\'%23ffffff\' fill-opacity=\'1\'/%3E%3C/svg%3E');">
    </div>

    <!-- Main Container -->
    <div class="relative w-full max-w-[420px] z-10">

        <!-- Header Section -->
        <div class="text-center mb-10 animate-fade-in-down">
            <div class="relative inline-flex items-center justify-center w-24 h-24 mb-6 group cursor-default">
                <!-- Glowing effect behind icon -->
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-indigo-500 rounded-3xl blur-xl group-hover:blur-2xl opacity-40 transition-all duration-700 animate-pulse-slow">
                </div>
                <!-- Icon Box -->
                <div
                    class="relative w-20 h-20 bg-slate-800/80 backdrop-blur-xl border border-slate-700/50 rounded-3xl shadow-2xl flex items-center justify-center transition-all duration-500 group-hover:scale-110 group-hover:-rotate-3 group-hover:border-blue-500/50">
                    <svg class="w-10 h-10 text-blue-400 drop-shadow-[0_0_15px_rgba(96,165,250,0.5)]" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                        </path>
                    </svg>
                </div>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-white tracking-tight leading-tight">
                Selamat <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-cyan-400 drop-shadow-sm">Datang</span>
            </h2>
            <p class="text-slate-400 mt-3 text-sm md:text-base font-medium opacity-0 animate-fade-in-delayed">
                Silakan masuk untuk melanjutkan PPDB
            </p>
        </div>

        <!-- Glassmorphism Card -->
        <div
            class="bg-slate-900/40 backdrop-blur-2xl rounded-[2.5rem] shadow-[0_8px_32px_0_rgba(0,0,0,0.3)] border border-slate-700/50 p-8 md:p-10 relative overflow-hidden transition-all duration-500 hover:border-slate-600/50 hover:shadow-[0_8px_32px_0_rgba(30,58,138,0.1)] animate-fade-in-up before:absolute before:inset-0 before:bg-gradient-to-b before:from-white/5 before:to-transparent before:pointer-events-none">

            <!-- Global Error Message -->
            @if (session()->has('error'))
                <div
                    class="mb-6 flex items-start bg-rose-500/10 border border-rose-500/30 text-rose-400 px-4 py-3.5 rounded-2xl animate-shake shadow-lg shadow-rose-900/20">
                    <svg class="w-5 h-5 mr-3 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-sm font-semibold leading-relaxed">{{ session('error') }}</span>
                </div>
            @endif

            <!-- Form -->
            <form wire:submit="login" class="space-y-5 relative z-20">
                <!-- Email Input -->
                <div class="space-y-1.5 opacity-0 animate-slide-in" style="animation-delay: 0.1s">
                    <label for="email" class="text-xs font-bold uppercase tracking-wider text-slate-400 ml-1">Email
                        Siswa</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206">
                                </path>
                            </svg>
                        </div>
                        <input id="email" type="email" wire:model="email" placeholder="nama@email.com"
                            class="w-full bg-slate-950/50 border border-slate-700/50 rounded-xl pl-11 pr-4 py-3.5 outline-none transition-all duration-300 focus:bg-slate-900 focus:border-blue-500/50 focus:ring-2 focus:ring-blue-500/20 text-slate-100 font-medium placeholder:text-slate-600 shadow-inner">
                    </div>
                    @error('email')
                        <div
                            class="flex items-center gap-1.5 text-rose-400 text-xs font-semibold mt-1 ml-1 animate-fade-in">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="space-y-1.5 opacity-0 animate-slide-in" style="animation-delay: 0.2s">
                    <label for="password" class="text-xs font-bold uppercase tracking-wider text-slate-400 ml-1">Kata
                        Sandi</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none transition-colors duration-300 group-focus-within:text-blue-400 text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <input id="password" type="password" wire:model="password" placeholder="••••••••"
                            class="w-full bg-slate-950/50 border border-slate-700/50 rounded-xl pl-11 pr-4 py-3.5 outline-none transition-all duration-300 focus:bg-slate-900 focus:border-blue-500/50 focus:ring-2 focus:ring-blue-500/20 text-slate-100 font-medium placeholder:text-slate-600 shadow-inner">
                    </div>
                    @error('password')
                        <div
                            class="flex items-center gap-1.5 text-rose-400 text-xs font-semibold mt-1 ml-1 animate-fade-in">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    class="group w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-bold py-3.5 rounded-xl shadow-[0_0_20px_rgba(79,70,229,0.3)] hover:shadow-[0_0_25px_rgba(79,70,229,0.5)] transition-all duration-300 hover:-translate-y-0.5 active:scale-[0.98] mt-8 flex items-center justify-center gap-3 relative overflow-hidden opacity-0 animate-fade-in-delayed">
                    <span class="relative z-10 tracking-wide">Masuk ke Dashboard</span>
                    <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1.5 transition-transform duration-300"
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
            <div
                class="mt-8 pt-6 border-t border-slate-700/50 text-center relative z-20 opacity-0 animate-fade-in-delayed">
                <p class="text-slate-400 text-sm">
                    Belum memiliki akun?
                    <a href="{{ route('register') }}"
                        class="font-semibold text-blue-400 hover:text-blue-300 transition-colors duration-300 relative inline-block group ml-1">
                        Buat Akun
                        <span
                            class="absolute -bottom-0.5 left-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 flex items-center justify-center gap-4 opacity-0 animate-fade-in-delayed">
            <div class="h-px w-12 bg-gradient-to-r from-transparent to-slate-700"></div>
            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em]">v2026 Secured</span>
            <div class="h-px w-12 bg-gradient-to-l from-transparent to-slate-700"></div>
        </div>
    </div>
</div>

<style>
    /* 1. Animasi Floating */
    @keyframes float {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.2;
        }

        50% {
            transform: translate(-20px, -20px) scale(1.05);
            opacity: 0.4;
        }
    }

    .animate-float {
        animation: float 8s infinite ease-in-out;
    }

    .animate-float-delayed {
        animation: float 10s infinite ease-in-out reverse;
        animation-delay: 2s;
    }

    /* 2. Animasi Shake untuk Error */
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

    /* 3. Animasi Masuk (Reveal) */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-15px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-in {
        animation: slideIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* 4. Fade Ins */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease-out forwards;
    }

    .animate-fade-in-delayed {
        animation: fadeIn 0.8s ease-out 0.5s forwards;
        opacity: 0;
    }

    /* 5. Pulse Slow */
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
