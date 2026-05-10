<div class="max-w-6xl mx-auto mt-12 px-4 pb-20">

    <div
        class="relative mb-10 overflow-hidden rounded-[2rem] bg-white border border-slate-100 shadow-xl shadow-slate-200/50">
        <div
            class="absolute top-0 left-0 w-full h-2 
            @if ($pendaftar->status == 'pending') bg-amber-400
            @elseif ($pendaftar->status == 'verif') bg-blue-500
            @elseif ($pendaftar->status == 'diterima') bg-emerald-500
            @elseif ($pendaftar->status == 'ditolak') bg-rose-500 @endif">
        </div>

        <div
            class="p-8 md:p-10 flex flex-col md:flex-row md:items-center justify-between gap-6 relative overflow-hidden">

            @if ($pendaftar->status == 'diterima')
                <div class="absolute inset-0 pointer-events-none z-0">
                    <div class="confetti c1"></div>
                    <div class="confetti c2"></div>
                    <div class="confetti c3"></div>
                    <div class="confetti c4"></div>
                    <div class="confetti c5"></div>
                    <div class="confetti c6"></div>
                </div>
            @endif

            <div class="flex items-center space-x-6 relative z-10">
                <div
                    class="w-20 h-20 rounded-2xl flex items-center justify-center text-3xl shadow-inner relative
            @if ($pendaftar->status == 'diterima') animate-celebrate shadow-emerald-200/50 @endif
            @if ($pendaftar->status == 'pending') bg-amber-50 text-amber-500
            @elseif ($pendaftar->status == 'verif') bg-blue-50 text-blue-500
            @elseif ($pendaftar->status == 'diterima') bg-emerald-500 text-white shadow-xl
            @elseif ($pendaftar->status == 'ditolak') bg-rose-50 text-rose-500 @endif">

                    @if ($pendaftar->status == 'pending')
                        ⏳
                    @elseif($pendaftar->status == 'verif')
                        🛡️
                    @elseif($pendaftar->status == 'diterima')
                        🎉
                    @else
                        ❌
                    @endif
                </div>

                <div>
                    <p class="text-sm font-bold uppercase tracking-widest text-slate-400 mb-1">Status Pendaftaran</p>
                    <h2 class="text-3xl font-black text-slate-800 tracking-tight">
                        {{ $pendaftar->status == 'verif' ? 'Terverifikasi' : ucfirst($pendaftar->status) }}
                    </h2>
                </div>
            </div>

            @if ($pendaftar->pesan_admin)
                <div class="flex-1 md:max-w-md bg-slate-50 border border-slate-100 p-4 rounded-2xl relative z-10">
                    <p class="text-xs font-bold text-slate-400 uppercase mb-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M18 10a8 8 0 11-16 0 8 8 0 0118 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z">
                            </path>
                        </svg>
                        Catatan Admin
                    </p>
                    <p class="text-slate-600 text-sm italic">"{{ $pendaftar->pesan_admin }}"</p>
                </div>
            @endif
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">

        <div class="flex-grow space-y-8">
            @if ($pendaftar)
                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
                    <div class="bg-slate-50/50 px-8 py-6 border-b border-slate-100 flex items-center justify-between">
                        <h3 class="text-xl font-bold text-slate-800 flex items-center">
                            <span class="w-2 h-6 bg-blue-600 rounded-full mr-3"></span>
                            Informasi Personal Siswa
                        </h3>
                        <span
                            class="text-xs font-bold text-blue-600 bg-blue-50 px-3 py-1 rounded-full uppercase">Biodata</span>
                    </div>

                    <div class="p-8 md:p-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">

                            {{-- Custom Helper UI --}}
                            @php
                                $renderItem = function ($label, $value, $icon = null) {
                                    return "
                                    <div class='group'>
                                        <label class='text-[11px] font-black uppercase tracking-wider text-slate-400 mb-2 block ml-1'>$label</label>
                                        <div class='flex items-center bg-slate-50 border border-slate-100 rounded-2xl p-4 group-hover:bg-white group-hover:border-blue-200 group-hover:shadow-md transition-all duration-300'>
                                            <span class='text-slate-800 font-semibold'>$value</span>
                                        </div>
                                    </div>";
                                };
                            @endphp

                            {!! $renderItem('Nama Lengkap', $pendaftar->nama_siswa) !!}
                            {!! $renderItem('NISN', $pendaftar->nisn ?: '-') !!}
                            {!! $renderItem('NIK Siswa', $pendaftar->nik) !!}
                            {!! $renderItem('Tempat, Tgl Lahir', $pendaftar->tmp_lahir . ', ' . $pendaftar->tgl_lahir) !!}
                            {!! $renderItem('Jenis Kelamin', $pendaftar->jk_siswa == 'L' ? 'Laki-laki' : 'Perempuan') !!}
                            {!! $renderItem('Agama', ucfirst($pendaftar->agama_siswa)) !!}

                            <div class="md:col-span-2">
                                {!! $renderItem('Alamat Domisili', $pendaftar->alamat_siswa) !!}
                            </div>

                            {!! $renderItem('Anak Ke', $pendaftar->anak_ke) !!}
                            {!! $renderItem('Jumlah Saudara', $pendaftar->jumlah_saudara) !!}
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
                    <div class="bg-slate-50/50 px-8 py-6 border-b border-slate-100 flex items-center justify-between">
                        <h3 class="text-xl font-bold text-slate-800 flex items-center">
                            <span class="w-2 h-6 bg-emerald-500 rounded-full mr-3"></span>
                            Data Orang Tua / Wali
                        </h3>
                    </div>

                    <div class="p-8 md:p-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                            {!! $renderItem('Nama Ayah', $pendaftar->nama_ayah) !!}
                            {!! $renderItem('Pekerjaan Ayah', $pendaftar->kerja_ayah) !!}
                            {!! $renderItem('Nama Ibu', $pendaftar->nama_ibu) !!}
                            {!! $renderItem('Pekerjaan Ibu', $pendaftar->kerja_ibu) !!}

                            <div class="md:col-span-2 group">
                                <label
                                    class="text-[11px] font-black uppercase tracking-wider text-slate-400 mb-2 block ml-1">Kontak
                                    WhatsApp</label>
                                <div class="flex items-center bg-emerald-50 border border-emerald-100 rounded-2xl p-4">
                                    <span
                                        class="w-10 h-10 bg-emerald-500 text-white flex items-center justify-center rounded-xl mr-4 shadow-lg shadow-emerald-200">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.414 0 .018 5.393 0 12.03c0 2.12.554 4.189 1.602 6.006L0 24l6.117-1.604a11.803 11.803 0 005.925 1.585h.005c6.635 0 12.032-5.391 12.036-12.027a11.8 11.8 0 01-3.441-8.452z" />
                                        </svg>
                                    </span>
                                    <span class="text-emerald-700 font-bold text-lg">+62
                                        {{ $pendaftar->phone_ortu }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-amber-50 border border-amber-200 p-8 rounded-[2rem] text-center">
                    <p class="text-amber-700 font-bold text-lg">⚠️ Anda belum mengisi formulir pendaftaran.</p>
                    <a href="/pendaftaran"
                        class="mt-4 inline-block bg-amber-500 text-white px-6 py-3 rounded-xl font-bold hover:bg-amber-600 transition">Mulai
                        Isi Form</a>
                </div>
            @endif
        </div>

        <div class="lg:w-80">
            <div class="sticky top-28 space-y-4">
                <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm">
                    <h4 class="text-sm font-black text-slate-400 uppercase tracking-widest mb-6">Navigasi Aksi</h4>

                    <div class="flex flex-col gap-3">
                        <a href="/edit-data"
                            class="flex items-center justify-between group bg-slate-50 hover:bg-amber-500 p-4 rounded-2xl transition-all duration-300">
                            <span class="font-bold text-slate-700 group-hover:text-white transition-colors">✏️ Edit
                                Biodata</span>
                            <svg class="w-5 h-5 text-slate-300 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>

                        <a href="/pendaftaran/upload-berkas"
                            class="flex items-center justify-between group bg-blue-600 hover:bg-blue-700 p-4 rounded-2xl transition-all duration-300 shadow-lg shadow-blue-200">
                            <span class="font-bold text-white">📁 Upload Berkas</span>
                            <svg class="w-5 h-5 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>

                        <button onclick="window.print()"
                            class="flex items-center justify-between group bg-slate-800 hover:bg-black p-4 rounded-2xl transition-all duration-300 text-white">
                            <span class="font-bold">🖨️ Cetak Kartu</span>
                            <svg class="w-5 h-5 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-600 to-indigo-700 p-8 rounded-[2rem] text-white shadow-xl">
                    <p class="text-xs font-bold uppercase tracking-widest text-blue-200 mb-2">Butuh Bantuan?</p>
                    <h5 class="text-lg font-bold mb-4">Hubungi Panitia PPDB</h5>
                    <p class="text-sm text-blue-100 leading-relaxed mb-6 opacity-80">Jika ada kendala mengenai validasi
                        data, silakan hubungi kami via WhatsApp.</p>
                    <a href="#"
                        class="block text-center bg-white/10 hover:bg-white/20 border border-white/20 py-3 rounded-xl transition font-bold">Chat
                        Helpdesk</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* 1. Animasi untuk Kotak Ikon 🎉 (Sedikit membesar dan membal) */
    @keyframes celebrate {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        50% {
            transform: scale(1.2);
            opacity: 1;
        }

        70% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .animate-celebrate {
        animation: celebrate 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    /* 2. Styling Dasar Confetti */
    .confetti {
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: #ffd700;
        /* Warna dasar emas */
        border-radius: 2px;
        opacity: 0;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* 3. Animasi Ledakan Confetti */
    @keyframes explode {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        100% {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) scale(0);
            opacity: 0;
        }
    }

    /* 4. Variasi Warna, Arah, dan Waktu Confetti */
    .confetti.c1 {
        --tw-translate-x: -80px;
        --tw-translate-y: -60px;
        --tw-rotate: 45deg;
        background-color: #34d399;
        animation: explode 0.8s ease-out 0.2s forwards;
    }

    /* Emerald */
    .confetti.c2 {
        --tw-translate-x: 80px;
        --tw-translate-y: -70px;
        --tw-rotate: -45deg;
        background-color: #60a5fa;
        animation: explode 0.8s ease-out 0.25s forwards;
    }

    /* Blue */
    .confetti.c3 {
        --tw-translate-x: -90px;
        --tw-translate-y: 20px;
        --tw-rotate: 90deg;
        background-color: #fb923c;
        animation: explode 0.8s ease-out 0.3s forwards;
    }

    /* Orange */
    .confetti.c4 {
        --tw-translate-x: 90px;
        --tw-translate-y: 30px;
        --tw-rotate: -90deg;
        background-color: #f472b6;
        animation: explode 0.8s ease-out 0.15s forwards;
    }

    /* Pink */
    .confetti.c5 {
        --tw-translate-x: 0px;
        --tw-translate-y: -90px;
        --tw-rotate: 180deg;
        background-color: #facc15;
        animation: explode 0.8s ease-out 0.2s forwards;
    }

    /* Yellow */
    .confetti.c6 {
        --tw-translate-x: 0px;
        --tw-translate-y: 70px;
        --tw-rotate: -180deg;
        background-color: #a78bfa;
        animation: explode 0.8s ease-out 0.35s forwards;
    }

    /* Purple */
</style>
