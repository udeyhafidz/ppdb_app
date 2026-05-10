<div
    class="min-h-screen flex items-center justify-center bg-[#0f172a] px-4 py-12 relative overflow-hidden animate-fade-in">

    <div
        class="absolute top-0 -left-20 w-80 h-80 bg-blue-500/10 rounded-full blur-[120px] animate-float pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 -right-20 w-80 h-80 bg-indigo-500/10 rounded-full blur-[120px] animate-float-delayed pointer-events-none">
    </div>

    <div class="absolute inset-0 opacity-[0.02] pointer-events-none"
        style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4z\' fill=\'%23ffffff\' fill-opacity=\'1\'/%3E%3C/svg%3E');">
    </div>

    <div class="relative w-full max-w-[440px] z-10">

        <div class="text-center mb-10 animate-fade-in-down">
            <div class="relative inline-flex items-center justify-center w-24 h-24 mb-6 group">
                <div
                    class="absolute inset-0 bg-blue-600/20 rounded-[2rem] blur-xl group-hover:blur-2xl transition-all duration-500 animate-pulse-slow">
                </div>
                <div
                    class="relative w-20 h-20 bg-white rounded-[2rem] shadow-2xl flex items-center justify-center transition-all duration-500 hover:scale-110 hover:-rotate-6">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                        </path>
                    </svg>
                </div>
            </div>
            <h2 class="text-5xl font-black text-white tracking-tighter leading-[0.95]">Selamat <span
                    class="text-transparent bg-clip-text bg-gradient-to-b from-blue-100 to-blue-400">Datang</span></h2>
            <p class="text-slate-400 mt-3 font-medium opacity-0 animate-fade-in-delayed">Masuk untuk melanjutkan proses
                PPDB Anda.</p>
        </div>

        <div
            class="bg-slate-900/60 backdrop-blur-2xl rounded-[3rem] shadow-[0_32px_64px_-12px_rgba(0,0,0,0.5)] border border-slate-800 p-10 relative overflow-hidden transition-all duration-500 hover:border-slate-700 animate-fade-in-up">

            @if (session()->has('error'))
                <div
                    class="mb-6 flex items-center bg-rose-500/10 border border-rose-500/20 text-rose-400 px-5 py-4 rounded-2xl animate-shake">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-xs font-bold">{{ session('error') }}</span>
                </div>
            @endif

            <form wire:submit="login" class="space-y-6 relative z-20">
                <div class="space-y-2 opacity-0 animate-slide-in" style="animation-delay: 0.1s">
                    <label class="text-[10px] font-black uppercase tracking-[0.25em] text-slate-500 ml-1">Email
                        Siswa</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors group-focus-within:text-blue-400 text-slate-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206">
                                </path>
                            </svg>
                        </div>
                        <input type="email" wire:model="email" placeholder="nama@email.com"
                            class="w-full bg-slate-800 border-2 border-slate-700 rounded-2xl pl-12 pr-5 py-4 outline-none transition-all focus:bg-slate-800/60 focus:border-blue-500/30 focus:ring-4 focus:ring-blue-500/5 text-slate-100 font-semibold placeholder:text-slate-600">
                    </div>
                    @error('email')
                        <div
                            class="flex items-start gap-2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-3">
                            <span>⚠️</span>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="space-y-2 opacity-0 animate-slide-in" style="animation-delay: 0.2s">
                    <label class="text-[10px] font-black uppercase tracking-[0.25em] text-slate-500 ml-1">Kata
                        Sandi</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none transition-colors group-focus-within:text-blue-400 text-slate-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <input type="password" wire:model="password" placeholder="••••••••"
                            class="w-full bg-slate-800 border-2 border-slate-700 rounded-2xl pl-12 pr-5 py-4 outline-none transition-all focus:bg-slate-800/60 focus:border-blue-500/30 focus:ring-4 focus:ring-blue-500/5 text-slate-100 font-semibold">
                    </div>
                    @error('password')
                        <p class="text-rose-400 text-[10px] font-bold mt-1.5 ml-2 uppercase tracking-tighter">
                            {{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-black py-4.5 rounded-2xl shadow-xl shadow-blue-900/40 transition-all hover:-translate-y-1 active:scale-[0.98] mt-6 flex items-center justify-center gap-3 relative overflow-hidden opacity-0 animate-fade-in-delayed">
                    <span class="relative z-10">Masuk ke Dashboard</span>
                    <svg class="w-5 h-5 opacity-70 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                    </div>
                </button>
            </form>

            <div
                class="mt-10 pt-8 border-t border-slate-800 text-center relative z-20 opacity-0 animate-fade-in-delayed">
                <p class="text-slate-400 text-sm font-medium italic">
                    Belum memiliki akun?
                    <a href="{{ route('register') }}"
                        class="text-blue-400 font-black hover:text-blue-300 underline decoration-2 underline-offset-8 transition-all non-italic">Buat
                        Akun</a>
                </p>
            </div>
        </div>

        <div class="mt-10 flex items-center justify-center gap-5 opacity-0 animate-fade-in-delayed">
            <div class="h-px w-16 bg-slate-800"></div>
            <span class="text-[10px] font-black text-slate-600 uppercase tracking-widest px-2">v2026 Secured</span>
            <div class="h-px w-16 bg-slate-800"></div>
        </div>
    </div>
</div>

<style>
    /* 1. Animasi Floating (Melayang-layang terus menerus) */
    @keyframes float {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.3;
        }

        50% {
            transform: translate(-30px, -30px) scale(1.1);
            opacity: 0.5;
        }
    }

    .animate-float {
        animation: float 8s infinite ease-in-out;
    }

    .animate-float-delayed {
        animation: float 10s infinite ease-in-out reverse;
        animation-delay: 2s;
    }

    /* 2. Animasi Masuk (Reveal) */
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
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
        opacity: 0;
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

    .animate-slide-in {
        animation: slideIn 0.8s ease-out forwards;
        opacity: 0;
    }

    /* 3. Delayed Fade Ins */
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }

    .animate-fade-in-delayed {
        animation: fadeIn 1s ease-out 0.6s forwards;
        opacity: 0;
    }

    /* Pulse Slow */
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
