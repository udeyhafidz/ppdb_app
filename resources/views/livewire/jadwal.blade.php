<div class="max-w-5xl mx-auto mt-12 px-4 pb-20">
    <div class="text-center mb-16 animate-fade-in">
        <div
            class="inline-block px-4 py-1 rounded-full bg-blue-100 text-blue-600 text-[10px] font-black uppercase tracking-[0.3em] mb-4">
            Information Center
        </div>
        <h2 class="text-5xl font-black text-slate-800 tracking-tighter">
            Timeline <span class="text-blue-600 italic">PPDB 2026</span>
        </h2>
        <p class="text-slate-500 mt-4 font-medium max-w-md mx-auto leading-relaxed">
            Pastikan Anda mencatat setiap tanggal penting di bawah ini untuk kelancaran proses pendaftaran.
        </p>
    </div>

    <div class="relative">
        <div
            class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-600 via-slate-200 to-slate-100 rounded-full">
        </div>

        <div class="space-y-16">
            @forelse ($jadwal as $index => $item)
                @php $isEven = $index % 2 == 0; @endphp

                <div class="relative flex flex-col md:flex-row items-center justify-between group reveal-item"
                    style="transition-delay: {{ $index * 150 }}ms">

                    <div
                        class="absolute left-1/2 transform -translate-x-1/2 hidden md:flex items-center justify-center">
                        <div
                            class="w-12 h-12 bg-white border-4 border-slate-100 rounded-full z-20 shadow-sm group-hover:border-blue-600 group-hover:shadow-[0_0_20px_rgba(37,99,235,0.4)] transition-all duration-500 flex items-center justify-center overflow-hidden">
                            <div
                                class="w-2 h-2 bg-slate-300 group-hover:bg-blue-600 group-hover:scale-[3] transition-all duration-500 rounded-full">
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-[44%] {{ $isEven ? 'md:text-right' : 'md:order-last md:text-left' }}">
                        <div
                            class="relative bg-white p-10 rounded-[3rem] border border-slate-100 shadow-[0_10px_40px_rgba(0,0,0,0.02)] 
                                    hover:shadow-[0_20px_60px_rgba(37,99,235,0.1)] hover:-translate-y-3 hover:border-blue-100
                                    transition-all duration-500 group-hover:ring-1 ring-blue-50">

                            <div
                                class="inline-flex items-center gap-2 px-5 py-2 rounded-2xl bg-slate-900 text-white text-xs font-bold mb-6 group-hover:bg-blue-600 transition-colors duration-500 shadow-lg">
                                <svg class="w-3.5 h-3.5 opacity-70" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                {{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d M') }} —
                                {{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d M Y') }}
                            </div>

                            <h3
                                class="text-2xl font-black text-slate-800 mb-3 tracking-tight group-hover:text-blue-600 transition-colors duration-500">
                                {{ $item->kegiatan }}
                            </h3>

                            <p
                                class="text-slate-500 leading-relaxed text-sm font-medium opacity-80 group-hover:opacity-100 transition-opacity">
                                {{ $item->keterangan }}
                            </p>

                            <div
                                class="absolute -bottom-2 -right-2 w-24 h-24 bg-blue-50 rounded-full blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none">
                            </div>
                        </div>
                    </div>

                    <div class="hidden md:block md:w-[44%]"></div>
                </div>

            @empty
                <div
                    class="bg-slate-50 border-2 border-dashed border-slate-200 rounded-[4rem] py-20 text-center animate-pulse">
                    <span class="text-5xl block mb-4">🗓️</span>
                    <h3 class="font-black text-slate-400 uppercase tracking-widest text-sm">Jadwal Belum Dipublikasikan
                    </h3>
                </div>
            @endforelse
        </div>
    </div>

    <div class="mt-20 max-w-2xl mx-auto">
        <div
            class="bg-blue-600 rounded-[2.5rem] p-1 shadow-2xl shadow-blue-200 group hover:scale-[1.02] transition-transform duration-500">
            <div
                class="bg-white rounded-[2.4rem] p-6 flex flex-col md:flex-row items-center gap-6 border border-white/20">
                <div
                    class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl animate-bounce">
                    🔔</div>
                <div class="text-center md:text-left flex-1">
                    <p class="text-[10px] font-black text-blue-600 uppercase tracking-[0.2em] mb-1">Catatan Penting</p>
                    <p class="text-slate-600 text-sm font-bold">Jadwal bersifat tentatif. Pastikan Anda selalu memantau
                        dashboard ini secara berkala.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animasi Reveal saat Load */
    @keyframes revealUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .reveal-item {
        opacity: 0;
        animation: revealUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Memperhalus pergerakan kursor */
    * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
</style>
