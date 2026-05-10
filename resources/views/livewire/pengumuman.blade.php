<div class="mt-12 mb-20">
    <div class="flex items-center justify-between mb-10 px-2">
        <div class="group">
            <h2 class="text-3xl font-black text-slate-800 tracking-tight flex items-center gap-4">
                <div class="relative">
                    <span
                        class="flex items-center justify-center w-14 h-14 bg-blue-600 text-white rounded-2xl shadow-xl shadow-blue-200 group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                            </path>
                        </svg>
                    </span>
                    <span
                        class="absolute -top-1 -right-1 w-4 h-4 bg-rose-500 border-4 border-white rounded-full animate-ping"></span>
                </div>
                <div class="flex flex-col">
                    <span>Pusat <span class="text-blue-600">Pengumuman</span></span>
                    <div class="h-1.5 w-0 group-hover:w-full bg-blue-600/20 rounded-full transition-all duration-700">
                    </div>
                </div>
            </h2>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-8">
        @forelse ($pengumuman as $index => $item)
            <div class="group relative bg-white rounded-[2.5rem] transition-all duration-500 hover:-translate-y-2 reveal-item"
                style="animation-delay: {{ $index * 150 }}ms">

                <div class="absolute inset-0 rounded-[2.5rem] overflow-hidden pointer-events-none">
                    <div class="shimmer-line"></div>
                </div>

                <div
                    class="relative z-10 bg-white/80 backdrop-blur-sm border border-slate-100 rounded-[2.5rem] p-2 shadow-[0_10px_30px_rgba(0,0,0,0.02)] group-hover:shadow-[0_30px_60px_rgba(37,99,235,0.1)] group-hover:border-blue-100 transition-all duration-500">
                    <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center gap-8">

                        <div class="flex-shrink-0 perspective">
                            <div
                                class="w-20 h-20 md:w-24 md:h-24 bg-slate-50 rounded-[2rem] flex flex-col items-center justify-center border border-slate-100 group-hover:bg-blue-600 group-hover:rotate-[10deg] transition-all duration-500 shadow-inner">
                                <span
                                    class="text-[10px] font-black uppercase tracking-widest text-slate-400 group-hover:text-blue-200 transition-colors">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('M') }}
                                </span>
                                <span
                                    class="text-3xl font-black text-slate-800 group-hover:text-white transition-colors">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}
                                </span>
                            </div>
                        </div>

                        <div class="flex-1">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-widest mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <span class="w-1.5 h-1.5 bg-current rounded-full animate-pulse"></span>
                                New Announcement
                            </div>
                            <h3
                                class="text-xl md:text-2xl font-black text-slate-800 mb-3 group-hover:text-blue-600 transition-colors">
                                {{ $item->judul }}
                            </h3>
                            <p class="text-slate-500 text-sm md:text-base leading-relaxed line-clamp-2 transition-all">
                                {{ $item->isi }}
                            </p>
                        </div>

                        <div class="flex-shrink-0">
                            <div
                                class="w-14 h-14 rounded-2xl border border-slate-100 flex items-center justify-center text-slate-300 group-hover:bg-blue-600 group-hover:text-white group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-sm">
                                <svg class="w-6 h-6 animate-arrow" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7-7 7M5 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="py-20 text-center opacity-50">
                <p class="font-bold text-slate-400 tracking-widest uppercase">No Announcements Found</p>
            </div>
        @endforelse
    </div>
</div>

<style>
    /* 1. Shimmer Animation (Kilauan lewat) */
    .shimmer-line {
        position: absolute;
        top: 0;
        left: -150%;
        width: 50%;
        height: 100%;
        background: linear-gradient(to right,
                transparent 0%,
                rgba(37, 99, 235, 0.05) 50%,
                transparent 100%);
        transform: skewX(-20deg);
        transition: 0s;
    }

    .group:hover .shimmer-line {
        left: 150%;
        transition: 1s;
    }

    /* 2. Arrow Movement Animation */
    @keyframes arrowMove {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(5px);
        }
    }

    .group:hover .animate-arrow {
        animation: arrowMove 1s infinite;
    }

    /* 3. Reveal Staggered */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px) scale(0.95);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .reveal-item {
        opacity: 0;
        animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* 4. Perspective for Flip Effect */
    .perspective {
        perspective: 1000px;
    }

    /* Line Clamp Fix */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
