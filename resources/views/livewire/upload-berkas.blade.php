<div class="max-w-5xl mx-auto mt-12 px-4 pb-24">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-black text-slate-800 tracking-tight">
            Arsip <span class="text-blue-600">Dokumen</span> PPDB
        </h2>
        <p class="text-slate-500 mt-3 text-lg">Silakan unggah dokumen pendukung dalam format gambar atau PDF.</p>
    </div>

    {{-- Success Message --}}
    @if (session()->has('success'))
        <div
            class="mb-8 flex items-center bg-emerald-50 border border-emerald-100 text-emerald-700 px-6 py-4 rounded-3xl animate-fade-in-down">
            <div
                class="w-8 h-8 bg-emerald-500 text-white rounded-full flex items-center justify-center mr-4 shadow-lg shadow-emerald-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <span class="font-bold">{{ session('success') }}</span>
        </div>
    @endif
    {{-- upload-berkas.blade.php --}}

    {{-- Status Verifikasi Berkas --}}
    @if (count($berkas) > 0)
        <div class="mb-8 space-y-4">
            @foreach ($berkas as $item)
                <div>
                    @if ($item->status_berkas === 'ditolak')
                        <div class="bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-2xl">
                            <p class="font-bold">
                                {{ strtoupper($item->jenis_berkas) }} ditolak
                            </p>
                            <p class="text-sm mt-1">
                                {{ $item->catatan_admin }}
                            </p>
                        </div>
                    @elseif ($item->status_berkas === 'valid')
                        <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl">
                            <p class="font-bold">
                                {{ strtoupper($item->jenis_berkas) }} valid
                            </p>
                        </div>
                    @else
                        <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 px-5 py-4 rounded-2xl">
                            <p class="font-bold">
                                {{ strtoupper($item->jenis_berkas) }}
                            </p>
                            <p class="text-sm mt-1">
                                Menunggu verifikasi admin.
                            </p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif

    <div class="bg-white shadow-[0_20px_50px_rgba(0,0,0,0.05)] rounded-[3rem] border border-slate-100 p-8 md:p-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            @php
                $files = [
                    ['id' => 'kk', 'label' => 'Kartu Keluarga', 'icon' => '📜', 'lama' => $kk_lama, 'baru' => $kk],
                    [
                        'id' => 'akta',
                        'label' => 'Akta Kelahiran',
                        'icon' => '🧒',
                        'lama' => $akta_lama,
                        'baru' => $akta,
                    ],
                    ['id' => 'ktp', 'label' => 'KTP Orang Tua', 'icon' => '🪪', 'lama' => $ktp_lama, 'baru' => $ktp],
                    [
                        'id' => 'foto',
                        'label' => 'Pas Foto Siswa',
                        'icon' => '📸',
                        'lama' => $foto_lama,
                        'baru' => $foto,
                    ],
                ];
            @endphp

            @foreach ($files as $file)
                <div class="group">
                    <label class="block text-xs font-black uppercase tracking-[0.2em] text-slate-400 mb-4 ml-2">
                        {{ $file['label'] }}
                    </label>

                    <div
                        class="relative border-2 border-dashed border-slate-200 rounded-[2rem] p-6 transition-all duration-300 group-hover:border-blue-400 group-hover:bg-blue-50/30 flex flex-col items-center justify-center text-center">

                        <div
                            class="w-16 h-16 bg-slate-50 text-3xl rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500 shadow-inner">
                            {{ $file['icon'] }}
                        </div>

                        @if ($file['lama'])
                            <div class="mb-3">
                                <a href="{{ asset('storage/' . $file['lama']) }}" target="_blank"
                                    class="inline-flex items-center text-xs font-bold text-blue-600 bg-blue-50 px-3 py-1.5 rounded-full hover:bg-blue-600 hover:text-white transition-colors">
                                    <svg class="w-3 h-3 mr-1.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                    Lihat File Tersimpan
                                </a>
                            </div>
                        @endif

                        <div class="relative w-full">
                            <input type="file" wire:model="{{ $file['id'] }}"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                            <div
                                class="bg-white border border-slate-200 rounded-xl py-2 px-4 text-sm font-bold text-slate-600 shadow-sm group-hover:shadow-md transition-shadow">
                                @if ($file['baru'])
                                    <span class="text-emerald-500">✅ {{ $file['baru']->getClientOriginalName() }}</span>
                                @else
                                    Pilih atau Seret File
                                @endif
                            </div>
                        </div>

                        @error($file['id'])
                            <span class="text-rose-500 text-[10px] font-bold mt-2 uppercase tracking-tighter italic">
                                {{ $message }}
                            </span>
                        @enderror

                        <div wire:loading wire:target="{{ $file['id'] }}"
                            class="mt-2 text-[10px] font-bold text-blue-500 animate-pulse uppercase">
                            Sedang Mengunggah...
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="mt-16 pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between gap-6">
            <a href="/detail" class="flex items-center text-slate-400 hover:text-slate-800 font-bold transition group">
                <div
                    class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center mr-3 group-hover:bg-slate-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </div>
                Kembali ke Detail
            </a>

            <button wire:click="simpan"
                class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white px-12 py-4 rounded-[1.5rem] font-black shadow-2xl shadow-blue-200 transition-all hover:-translate-y-1 active:translate-y-0 flex items-center justify-center gap-3">
                <svg class="w-5 h-5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                </svg>
                {{ $sudahUpload ? 'Perbarui Berkas Sekarang' : 'Simpan Seluruh Dokumen' }}
            </button>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4 italic text-center text-slate-400 text-xs">
        <p>• Maksimal ukuran file 2MB</p>
        <p>• Format yang didukung: JPG, PNG, PDF</p>
        <p>• Pastikan dokumen terbaca dengan jelas</p>
    </div>
</div>
