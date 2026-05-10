<div class="max-w-6xl mx-auto mt-10 px-4 pb-20">

    <div class="text-center mb-12">
        <div
            class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-2xl mb-4 shadow-xl shadow-blue-200 rotate-3">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
            </svg>
        </div>
        <h2 class="text-4xl font-black text-slate-800 tracking-tight">Manajemen <span
                class="text-blue-600">Berkas</span></h2>
        <p class="text-slate-500 mt-2 font-medium text-lg">Tinjau dokumen lama Anda atau perbarui dengan berkas terbaru.
        </p>
    </div>

    @if (session()->has('success'))
        <div
            class="mb-8 flex items-center bg-emerald-500 text-white px-6 py-4 rounded-3xl shadow-lg shadow-emerald-100 transition-all animate-fade-in">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="font-bold">{{ session('success') }}</span>
        </div>
    @endif

    <div class="space-y-6">
        @php
            $berkas = [
                ['id' => 'kk', 'title' => 'Kartu Keluarga', 'old' => $kk_lama, 'model' => $kk],
                ['id' => 'akta', 'title' => 'Akta Kelahiran', 'old' => $akta_lama, 'model' => $akta],
                ['id' => 'ktp', 'title' => 'KTP Orang Tua', 'old' => $ktp_lama, 'model' => $ktp],
                ['id' => 'foto', 'title' => 'Foto Terbaru Siswa', 'old' => $foto_lama, 'model' => $foto],
            ];
        @endphp

        @foreach ($berkas as $item)
            <div
                class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="flex flex-col lg:flex-row">

                    <div class="lg:w-1/3 bg-slate-50/50 p-8 border-b lg:border-b-0 lg:border-r border-slate-100">
                        <div class="flex items-center mb-6">
                            <div class="w-8 h-8 bg-slate-200 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-black text-slate-700 uppercase text-xs tracking-widest">Arsip Berkas</h3>
                        </div>

                        <div class="space-y-4">
                            <p class="text-sm font-bold text-slate-500 uppercase tracking-tighter">{{ $item['title'] }}
                            </p>

                            @if ($item['old'])
                                <div
                                    class="group relative rounded-2xl overflow-hidden bg-white border border-slate-200 p-2 shadow-sm">
                                    <div
                                        class="aspect-video bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 overflow-hidden">
                                        <svg class="w-12 h-12 opacity-20" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <a href="{{ route('ulang.berkas', $item['old']) }}" target="_blank"
                                        class="absolute inset-0 bg-blue-600/90 flex items-center justify-center text-white font-bold opacity-0 group-hover:opacity-100 transition-opacity">
                                        Buka Berkas ↗
                                    </a>
                                </div>
                            @else
                                <div class="py-10 border-2 border-dashed border-slate-200 rounded-2xl text-center">
                                    <span class="text-xs font-bold text-slate-400 italic">Belum ada data</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="lg:w-2/3 p-8 lg:p-10 relative">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="font-black text-blue-600 uppercase text-xs tracking-widest flex items-center">
                                <span class="w-2 h-2 bg-blue-600 rounded-full animate-ping mr-2"></span>
                                Update Berkas Baru
                            </h3>
                            @if ($item['model'])
                                <span
                                    class="text-[10px] bg-emerald-100 text-emerald-600 px-3 py-1 rounded-full font-black uppercase">Siap
                                    Diunggah</span>
                            @endif
                        </div>

                        <div class="relative group">
                            <div
                                class="relative flex flex-col items-center justify-center py-12 px-6 bg-slate-50 border-2 border-dashed border-slate-200 rounded-[2rem] transition-all group-hover:border-blue-400 group-hover:bg-blue-50/30">

                                <input type="file" wire:model="{{ $item['id'] }}"
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">

                                @if ($item['model'])
                                    <div class="text-emerald-500 flex flex-col items-center">
                                        <div
                                            class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-3">
                                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <span
                                            class="text-sm font-bold text-slate-700">{{ $item['model']->getClientOriginalName() }}</span>
                                    </div>
                                @else
                                    <div
                                        class="flex flex-col items-center text-slate-400 group-hover:text-blue-500 transition-colors">
                                        <svg class="w-12 h-12 mb-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="text-sm font-black uppercase tracking-widest">Klik atau Seret File</p>
                                        <p class="text-[10px] mt-1 font-medium opacity-60">PDF, JPG, atau PNG (Max 2MB)
                                        </p>
                                    </div>
                                @endif
                            </div>

                            <div wire:loading wire:target="{{ $item['id'] }}"
                                class="absolute bottom-0 left-4 right-4 h-1 bg-blue-100 rounded-full overflow-hidden">
                                <div class="h-full bg-blue-600 animate-[shimmer_1.5s_infinite]"></div>
                            </div>
                        </div>

                        @error($item['id'])
                            <p class="text-rose-500 text-[10px] font-black mt-3 ml-2 uppercase italic tracking-wider">
                                {{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div
        class="mt-12 flex flex-col md:flex-row items-center justify-between gap-6 p-8 bg-slate-900 rounded-[2.5rem] shadow-2xl shadow-slate-300">
        <a href="/" class="flex items-center text-slate-400 hover:text-white font-bold transition group">
            <svg class="w-5 h-5 mr-3 group-hover:-translate-x-2 transition-transform" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>
            Kembali ke Dashboard
        </a>

        <button wire:click="simpan"
            class="w-full md:w-auto bg-blue-600 hover:bg-blue-500 text-white px-12 py-5 rounded-2xl font-black transition-all hover:scale-105 active:scale-95 shadow-xl shadow-blue-900/20">
            Simpan Perubahan Berkas
        </button>
    </div>

    <div class="mt-10 flex items-start gap-4 bg-amber-50/50 border border-amber-100 p-6 rounded-3xl">
        <span class="text-2xl">🧐</span>
        <div class="text-xs text-amber-800 leading-relaxed font-medium">
            <strong>Catatan:</strong> Jika Anda mengunggah berkas baru, sistem akan secara otomatis mengganti berkas
            lama Anda setelah Anda menekan tombol "Simpan Perubahan". Pastikan dokumen yang diunggah adalah versi
            terbaru yang valid.
        </div>
    </div>
</div>

<style>
    @keyframes shimmer {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
