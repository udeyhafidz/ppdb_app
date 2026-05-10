<div
    class="min-h-screen flex items-center justify-center bg-[#0f172a] px-4 py-12 relative overflow-hidden animate-fade-in">

    <div
        class="absolute top-0 -left-20 w-[600px] h-[600px] bg-blue-600/10 rounded-full blur-[120px] animate-blob pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 -right-20 w-[600px] h-[600px] bg-indigo-600/10 rounded-full blur-[120px] animate-blob animation-delay-2000 pointer-events-none">
    </div>

    <div class="absolute inset-0 opacity-[0.02] pointer-events-none"
        style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4z\' fill=\'%23ffffff\'/%3E%3C/svg%3E');">
    </div>

    <div class="relative w-full max-w-md z-10">

        <div class="text-center mb-10 animate-fade-in-down">
            <div
                class="inline-flex items-center justify-center w-20 h-20 bg-blue-600 rounded-[1.8rem] shadow-[0_0_40px_rgba(37,99,235,0.3)] mb-6 transform -rotate-6 hover:rotate-0 transition-all duration-500 animate-bounce-gentle">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.247 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                </svg>
            </div>
            <h2 class="text-5xl font-black text-white tracking-tighter leading-none">Buat Akun <span
                    class="text-transparent bg-clip-text bg-gradient-to-b from-blue-100 to-blue-400">PPDB</span></h2>
            <p class="text-slate-400 mt-3 font-medium animate-pulse-slow">Langkah awal menuju masa depan gemilang.</p>
        </div>

        <div
            class="bg-slate-900/60 backdrop-blur-2xl rounded-[3rem] shadow-[0_32px_64px_-12px_rgba(0,0,0,0.5)] border border-slate-800 p-8 md:p-12 relative overflow-hidden transition-all duration-500 hover:border-slate-700 animate-fade-in-up">

            <div class="absolute inset-0 rounded-[3rem] overflow-hidden pointer-events-none">
                <div class="shimmer-line"></div>
            </div>

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

            <form wire:submit.prevent="register" class="space-y-6 relative z-10">
                <div class="space-y-2 animate-slide-in" style="animation-delay: 0.1s">
                    <label class="text-[10px] font-black uppercase tracking-[0.25em] text-slate-500 ml-2">Nama Lengkap
                        Siswa</label>
                    <input type="text" wire:model="name" placeholder="Sesuai Ijazah"
                        class="w-full bg-slate-800 border-2 border-slate-700 rounded-2xl px-6 py-4 outline-none transition-all focus:bg-slate-800/60 focus:border-blue-500/30 focus:ring-4 focus:ring-blue-500/5 text-slate-100 font-semibold placeholder:text-slate-600">
                    @error('name')
                        <p class="text-rose-400 text-[10px] font-bold mt-1.5 ml-2 uppercase tracking-tighter">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="space-y-2 animate-slide-in" style="animation-delay: 0.2s">
                    <label class="text-[10px] font-black uppercase tracking-[0.25em] text-slate-500 ml-2">Alamat
                        Email</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none text-slate-600 group-focus-within:text-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                </path>
                            </svg>
                        </div>
                        <input type="email" wire:model="email" placeholder="contoh@email.com"
                            class="w-full bg-slate-800 border-2 border-slate-700 rounded-2xl pl-12 pr-6 py-4 outline-none transition-all focus:bg-slate-800/60 focus:border-blue-500/30 focus:ring-4 focus:ring-blue-500/5 text-slate-100 font-semibold placeholder:text-slate-600">
                        @error('email')
                            <p class="text-rose-400 text-[10px] font-bold mt-1.5 ml-2 uppercase tracking-tighter">
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="space-y-4 animate-slide-in" style="animation-delay: 0.3s">
                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-[0.25em] text-slate-500 ml-2">Kata Sandi
                            Baru</label>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none text-slate-600 group-focus-within:text-blue-400 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <input type="password" wire:model="password" placeholder="Min. 8 Karakter"
                                class="w-full bg-slate-800 border-2 border-slate-700 rounded-2xl pl-12 pr-6 py-4 outline-none transition-all focus:bg-slate-800/60 focus:border-blue-500/30 focus:ring-4 focus:ring-blue-500/5 text-slate-100 font-semibold">
                            @error('password')
                                <p class="text-rose-400 text-[10px] font-bold mt-1.5 ml-2 uppercase tracking-tighter">
                                    {{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-[0.25em] text-slate-500 ml-2">Konfirmasi
                            Sandi</label>
                        <div class="relative group">
                            <div
                                class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none text-slate-600 group-focus-within:text-blue-400 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <input type="password" wire:model="password_confirmation" placeholder="Ulangi Sandi"
                                class="w-full bg-slate-800 border-2 border-slate-700 rounded-2xl pl-12 pr-6 py-4 outline-none transition-all focus:bg-slate-800/60 focus:border-blue-500/30 focus:ring-4 focus:ring-blue-500/5 text-slate-100 font-semibold">
                            {{-- @error('password_confirmation')
                                <p class="text-rose-400 text-[10px] font-bold mt-1.5 ml-2 uppercase tracking-tighter">
                                    {{ $message }}</p>
                            @enderror --}}
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-black py-5 rounded-[1.5rem] shadow-xl shadow-blue-900/40 transition-all hover:-translate-y-1 active:scale-[0.98] mt-6 flex items-center justify-center gap-3 group/btn relative overflow-hidden">
                    <span class="relative z-10">Daftar Sekarang</span>
                    <svg class="w-5 h-5 group-hover/btn:translate-x-2 transition-transform relative z-10" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                    </div>
                </button>
            </form>

            <div class="mt-10 pt-8 border-t border-slate-800 text-center animate-fade-in-delayed">
                <p class="text-slate-500 text-sm font-medium">
                    Sudah punya akun?
                    <a href="{{ route('login') }}"
                        class="text-blue-400 font-black hover:text-blue-300 underline decoration-2 underline-offset-8 transition-all">Masuk
                        Sekarang</a>
                </p>
            </div>
        </div>

        <p class="text-center mt-12 text-slate-600 text-[10px] font-black uppercase tracking-[0.3em] opacity-40">
            &copy; 2026 PPDB Online &bull; Secure Enrollment
        </p>
    </div>
</div>

<style>
    /* 1. Base Fade In */
    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }

    .animate-fade-in-delayed {
        animation: fadeIn 1s ease-out 0.8s forwards;
        opacity: 0;
    }

    /* 2. Shimmer Line */
    .shimmer-line {
        position: absolute;
        top: 0;
        left: -150%;
        width: 50%;
        height: 100%;
        background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.05), transparent);
        transform: skewX(-20deg);
        transition: 0s;
    }

    .group:hover .shimmer-line {
        left: 150%;
        transition: 1.5s;
    }

    /* 3. Entrance Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
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
        animation: slideIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        opacity: 0;
    }

    /* 4. Background Blob */
    @keyframes blob {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(40px, -40px) scale(1.1);
        }
    }

    .animate-blob {
        animation: blob 12s infinite alternate ease-in-out;
    }

    /* 5. Bounce & Pulse */
    @keyframes bounce-gentle {

        0%,
        100% {
            transform: translateY(0) rotate(-6deg);
        }

        50% {
            transform: translateY(-10px) rotate(-6deg);
        }
    }

    .animate-bounce-gentle {
        animation: bounce-gentle 3s infinite ease-in-out;
    }

    .animate-pulse-slow {
        animation: pulse 4s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.6;
        }

        50% {
            opacity: 1;
        }
    }
</style>
