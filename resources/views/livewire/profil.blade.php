<div class="max-w-2xl mx-auto mt-16 px-4 pb-20 animate-all-fade">
    <!-- Header Section dengan Animasi Bounce Halus -->
    <div class="flex items-center gap-5 mb-10 group">
        <div
            class="w-14 h-14 bg-gradient-to-tr from-blue-600 to-indigo-500 rounded-2xl flex items-center justify-center shadow-2xl shadow-blue-200 group-hover:rotate-6 transition-transform duration-500">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
        </div>
        <div>
            <h2 class="text-4xl font-black text-slate-800 tracking-tight leading-none">
                Pengaturan <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Profil</span>
            </h2>
            <p class="text-slate-400 font-medium mt-2">Kelola identitas digital dan keamanan akun Anda.</p>
        </div>
    </div>

    <!-- Alert Success yang Lebih Elegan -->
    @if (session()->has('success'))
        <div
            class="mb-8 flex items-center bg-emerald-500 text-white px-6 py-4 rounded-2xl shadow-lg shadow-emerald-200/50 animate-bounce-in">
            <div class="bg-white/20 p-1.5 rounded-lg mr-4">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <span class="font-bold text-sm tracking-wide">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Main Card dengan Efek Glassmorphism -->
    <div
        class="bg-white/80 backdrop-blur-xl shadow-[0_32px_64px_-16px_rgba(0,0,0,0.08)] rounded-[3rem] border border-white overflow-hidden transition-all duration-500 hover:shadow-[0_40px_80px_-16px_rgba(59,130,246,0.12)]">
        <form wire:submit.prevent="updateProfile" class="p-10 md:p-12 space-y-8">

            <!-- Section: Informasi Akun -->
            <div class="space-y-6">
                <div class="flex items-center gap-3">
                    <span class="h-px flex-1 bg-slate-100"></span>
                    <h3 class="text-[11px] font-black uppercase tracking-[0.3em] text-blue-500/60">Informasi Dasar</h3>
                    <span class="h-px flex-1 bg-slate-100"></span>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <!-- Input Nama -->
                    <div class="group space-y-2">
                        <label
                            class="text-xs font-black text-slate-500 uppercase tracking-wider ml-1 group-focus-within:text-blue-600 transition-colors">Nama
                            Lengkap</label>
                        <div class="relative">
                            <input type="text" wire:model="name"
                                class="w-full bg-slate-50/50 border-slate-100 rounded-2xl px-5 py-4 focus:ring-[6px] focus:ring-blue-50 focus:bg-white focus:border-blue-400 border-2 outline-none transition-all duration-300 placeholder:text-slate-300 font-semibold text-slate-700">
                        </div>
                        @error('name')
                            <span
                                class="flex items-center gap-1 text-rose-500 text-[11px] font-bold mt-1 ml-1 animate-shake">
                                <span class="w-1 h-1 bg-rose-500 rounded-full"></span> {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Input Email -->
                    <div class="group space-y-2">
                        <label
                            class="text-xs font-black text-slate-500 uppercase tracking-wider ml-1 group-focus-within:text-blue-600 transition-colors">Alamat
                            Email</label>
                        <div class="relative">
                            <input type="email" wire:model="email"
                                class="w-full bg-slate-50/50 border-slate-100 rounded-2xl px-5 py-4 focus:ring-[6px] focus:ring-blue-50 focus:bg-white focus:border-blue-400 border-2 outline-none transition-all duration-300 placeholder:text-slate-300 font-semibold text-slate-700">
                        </div>
                        @error('email')
                            <span
                                class="flex items-center gap-1 text-rose-500 text-[11px] font-bold mt-1 ml-1 animate-shake">
                                <span class="w-1 h-1 bg-rose-500 rounded-full"></span> {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section: Keamanan -->
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-[11px] font-black uppercase tracking-[0.3em] text-blue-500/60">Privasi & Keamanan
                    </h3>
                    <span
                        class="text-[9px] font-black text-white bg-blue-400/80 px-2 py-1 rounded-full uppercase">Opsional</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="group space-y-2">
                        <label
                            class="text-xs font-black text-slate-500 uppercase tracking-wider ml-1 group-focus-within:text-blue-600 transition-colors">Password
                            Baru</label>
                        <input type="password" wire:model="password" placeholder="••••••••"
                            class="w-full bg-slate-50/50 border-slate-100 rounded-2xl px-5 py-4 focus:ring-[6px] focus:ring-blue-50 focus:bg-white focus:border-blue-400 border-2 outline-none transition-all duration-300 font-semibold">

                    </div>

                    <div class="group space-y-2">
                        <label
                            class="text-xs font-black text-slate-500 uppercase tracking-wider ml-1 group-focus-within:text-blue-600 transition-colors">Konfirmasi</label>
                        <input type="password" wire:model="password_confirmation" placeholder="••••••••"
                            class="w-full bg-slate-50/50 border-slate-100 rounded-2xl px-5 py-4 focus:ring-[6px] focus:ring-blue-50 focus:bg-white focus:border-blue-400 border-2 outline-none transition-all duration-300 font-semibold">
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="pt-6 flex flex-col sm:flex-row items-center gap-4">
                <button type="submit"
                    class="w-full sm:flex-1 bg-slate-900 hover:bg-blue-600 text-white px-8 py-5 rounded-[1.5rem] font-black shadow-2xl shadow-slate-200 hover:shadow-blue-200 transition-all duration-500 hover:-translate-y-1.5 active:scale-95 flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    Simpan Profil
                </button>

                <a href="/"
                    class="w-full sm:w-auto bg-slate-100 hover:bg-white hover:shadow-lg text-slate-500 px-8 py-5 rounded-[1.5rem] font-bold transition-all duration-300 text-center border border-transparent hover:border-slate-100 active:scale-95">
                    Batalkan
                </a>
            </div>
        </form>
    </div>

    <!-- Security Tips Footer -->
    <div
        class="mt-10 p-8 bg-gradient-to-br from-slate-900 to-slate-800 rounded-[2.5rem] shadow-xl relative overflow-hidden group">
        <div
            class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-150 transition-transform duration-700 text-6xl">
            🛡️</div>
        <div class="relative z-10 flex gap-5 items-start">
            <div class="p-3 bg-white/10 rounded-xl backdrop-blur-md">
                <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                </svg>
            </div>
            <div>
                <h4 class="text-sm font-black text-white uppercase tracking-widest">Tips Keamanan Akun</h4>
                <p class="text-slate-400 text-xs leading-relaxed mt-2 font-medium">
                    Gunakan <span class="text-blue-400 font-bold">Autentikasi Dua Faktor</span> dan ganti password Anda
                    secara berkala setiap 3 bulan untuk keamanan maksimal.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-4px);
        }

        75% {
            transform: translateX(4px);
        }
    }

    .animate-all-fade {
        animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-shake {
        animation: shake 0.4s ease-in-out;
    }

    .animate-bounce-in {
        animation: bounceIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    @keyframes bounceIn {
        0% {
            transform: scale(0.9);
            opacity: 0;
        }

        70% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>
