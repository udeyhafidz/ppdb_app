<div class="max-w-7xl mx-auto px-4 py-10">

    <div class="mb-10">
        <h1 class="text-4xl font-black text-slate-800 tracking-tight">
            Dashboard <span class="text-blue-600">PPDB</span>
        </h1>
        <p class="text-slate-500 mt-2 text-lg italic">Pantau statistik dan status pendaftaran Anda secara real-time.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">

        <div
            class="group relative bg-white border border-slate-100 rounded-[2.5rem] p-7 shadow-xl shadow-slate-200/40 hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
            <div
                class="absolute -right-4 -top-4 w-24 h-24 bg-blue-50 rounded-full group-hover:scale-[3] transition-transform duration-700 ease-in-out opacity-50">
            </div>

            <div class="relative z-10">
                <div class="flex justify-between items-center mb-4">
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Total Pendaftar</p>
                    <div
                        class="text-blue-500 bg-blue-50 p-2 rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                </div>
                <h3
                    class="text-5xl font-black text-slate-800 tracking-tighter group-hover:text-blue-600 transition-colors">
                    {{ $totalPendaftar }}</h3>
                <div
                    class="mt-4 flex items-center text-[9px] font-black text-blue-600 bg-blue-100/50 w-max px-3 py-1 rounded-full uppercase tracking-widest">
                    Data Real-time
                </div>
            </div>
        </div>

        <div
            class="group bg-white border border-slate-100 rounded-[2.5rem] p-7 shadow-xl shadow-slate-200/40 hover:shadow-emerald-500/10 transition-all duration-500 hover:-translate-y-2">
            <div
                class="w-14 h-14 bg-emerald-50 text-emerald-500 rounded-[1.5rem] flex items-center justify-center text-3xl mb-5 shadow-inner group-hover:rotate-12 transition-transform duration-300">
                👦</div>
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Laki-laki</p>
            <h3 class="text-4xl font-black text-slate-800 mt-1 group-hover:text-emerald-600 transition-colors">
                {{ $laki }}</h3>
            <div class="w-8 h-1 bg-emerald-100 rounded-full mt-3 group-hover:w-full transition-all duration-500"></div>
        </div>

        <div
            class="group bg-white border border-slate-100 rounded-[2.5rem] p-7 shadow-xl shadow-slate-200/40 hover:shadow-pink-500/10 transition-all duration-500 hover:-translate-y-2">
            <div
                class="w-14 h-14 bg-pink-50 text-pink-500 rounded-[1.5rem] flex items-center justify-center text-3xl mb-5 shadow-inner group-hover:-rotate-12 transition-transform duration-300">
                👧</div>
            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Perempuan</p>
            <h3 class="text-4xl font-black text-slate-800 mt-1 group-hover:text-pink-600 transition-colors">
                {{ $perempuan }}</h3>
            <div class="w-8 h-1 bg-pink-100 rounded-full mt-3 group-hover:w-full transition-all duration-500"></div>
        </div>

        <div
            class="group relative bg-emerald-600 rounded-[2.5rem] p-7 shadow-2xl shadow-emerald-200/50 hover:scale-105 transition-all duration-500 overflow-hidden">
            <div
                class="absolute -right-2 -bottom-2 text-8xl opacity-10 group-hover:rotate-12 transition-transform duration-500">
                ✨</div>
            <div class="relative z-10">
                <p class="text-[10px] font-black uppercase tracking-[0.2em] text-emerald-100/80 mb-1">Status Diterima
                </p>
                <h3 class="text-5xl font-black text-white tracking-tighter">{{ $diterima }}</h3>
                <div class="mt-6 flex items-center gap-2">
                    <div class="flex -space-x-2">
                        <div class="w-6 h-6 rounded-full border-2 border-emerald-600 bg-emerald-100"></div>
                        <div class="w-6 h-6 rounded-full border-2 border-emerald-600 bg-emerald-200"></div>
                    </div>
                    <span class="text-[10px] font-bold text-emerald-50 italic">Siswa Lolos</span>
                </div>
            </div>
        </div>

        <div
            class="group bg-slate-50 border-2 border-dashed border-slate-200 rounded-[2.5rem] p-7 hover:border-rose-300 hover:bg-rose-50/30 transition-all duration-500">
            <div class="flex flex-col h-full justify-between">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-1">Belum Lolos</p>
                    <h3 class="text-4xl font-black text-slate-400 group-hover:text-rose-500 transition-colors">
                        {{ $ditolak }}</h3>
                </div>
                <div class="mt-4">
                    <span
                        class="text-[9px] font-bold text-rose-400 bg-rose-50 px-2 py-1 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        MEMBUTUHKAN TINDAKAN
                    </span>
                </div>
            </div>
        </div>
    </div>

    @if (auth()->check())
        <div class="mt-12 relative overflow-hidden bg-slate-900 rounded-[3rem] p-1 shadow-2xl shadow-slate-400">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-indigo-500/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl"></div>

            <div class="relative bg-white/5 backdrop-blur-xl rounded-[2.8rem] p-8 md:p-12 border border-white/10">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">

                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-white text-3xl font-black mb-2 tracking-tight">Status Pendaftaran Anda</h2>
                        <p class="text-slate-400 font-medium">Sistem memproses data secara otomatis untuk validasi
                            berkas.</p>
                    </div>

                    <div class="w-full md:w-auto">
                        @if ($pendaftar)
                            @if ($pendaftar->status == 'pending' || $pendaftar->status == 'verif')
                                <div
                                    class="bg-amber-400/10 border border-amber-400/20 text-amber-400 p-6 rounded-3xl text-center">
                                    <span class="text-4xl block mb-2">⏳</span>
                                    <p class="font-black uppercase tracking-widest text-sm">Sedang Diverifikasi</p>
                                    <p class="text-xs opacity-70 mt-1">Mohon tunggu kabar dari Admin.</p>
                                </div>
                            @elseif ($pendaftar->status == 'diterima')
                                <div
                                    class="bg-emerald-500 text-white p-8 rounded-3xl text-center shadow-2xl shadow-emerald-500/30">
                                    <span class="text-4xl block mb-2">🎉</span>
                                    <h4 class="text-2xl font-black mb-1 leading-none text-white">SELAMAT!</h4>
                                    <p class="font-bold text-emerald-100 mb-4">Anda Dinyatakan Diterima</p>

                                    @if ($pendaftar->status_ulang == 'belum')
                                        <a href="/daftar-ulang"
                                            class="block bg-white text-emerald-600 px-8 py-3 rounded-2xl font-black hover:bg-emerald-50 transition-colors shadow-lg">
                                            Lakukan Daftar Ulang Sekarang
                                        </a>
                                    @elseif ($pendaftar->status_ulang == 'pending')
                                        <div
                                            class="bg-white/20 p-4 rounded-2xl text-sm font-bold border border-white/20">
                                            Berkas Daftar Ulang Sedang Diperiksa 🔍
                                        </div>
                                    @elseif ($pendaftar->status_ulang == 'valid')
                                        <div class="space-y-4">
                                            <div
                                                class="bg-white/20 p-4 rounded-2xl text-sm font-black border border-white/30 uppercase tracking-widest">
                                                SISWA RESMI ✅
                                            </div>
                                            <button wire:click="cetakBukti"
                                                class="w-full bg-slate-900 text-white px-8 py-4 rounded-2xl font-black hover:bg-black transition flex items-center justify-center gap-2">
                                                📄 Cetak Bukti Penerimaan
                                            </button>
                                        </div>
                                    @elseif ($pendaftar->status_ulang == 'ditolak')
                                        <div class="space-y-4">
                                            <div
                                                class="bg-white/20 p-4 rounded-2xl text-sm font-black border border-white/30 uppercase tracking-widest">
                                                SISWA Ditolak
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @elseif ($pendaftar->status == 'ditolak')
                                <div
                                    class="bg-rose-500/10 border border-rose-500/20 text-rose-500 p-8 rounded-3xl text-center">
                                    <span class="text-4xl block mb-2">❌</span>
                                    <h4 class="text-xl font-black mb-1 text-white">Mohon Maaf</h4>
                                    <p class="text-sm font-bold opacity-80 uppercase tracking-widest">Tidak Dapat
                                        Diterima</p>
                                </div>
                            @endif

                            <a href="/detail"
                                class="mt-6 flex items-center justify-center text-slate-400 hover:text-white transition-colors font-bold text-sm">
                                Lihat Detail Biodata Saya
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        @else
                            <div class="bg-white/5 border border-white/10 p-8 rounded-3xl text-center md:text-right">
                                <p class="text-white font-bold mb-4">Anda belum memiliki data pendaftaran.</p>
                                @if ($bisaDaftar)
                                    <a href="/pendaftaran"
                                        class="inline-block bg-blue-600 hover:bg-blue-500 text-white px-10 py-4 rounded-2xl font-black shadow-xl shadow-blue-500/20 transition-all active:scale-95">
                                        Mulai Daftar Sekarang
                                    </a>
                                @else
                                    <span
                                        class="inline-block bg-slate-700 text-slate-400 px-10 py-4 rounded-2xl font-black italic cursor-not-allowed">
                                        Pendaftaran Ditutup / Belum Buka
                                    </span>
                                @endif
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    @endif

</div>

<style>
    /* Animasi angka berhitung sederhana saat hover (opsional secara visual) */
    .group:hover h3 {
        transform: scale(1.05);
        transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
</style>
