<div class="max-w-5xl mx-auto px-4 py-8">
    <div class="mb-10 text-center md:text-left">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">
            Formulir <span class="text-blue-600">Pendaftaran</span>
        </h2>
        <p class="text-slate-500 mt-2">Lengkapi data calon siswa dengan teliti untuk proses seleksi PPDB.</p>
    </div>

    <div class="bg-white shadow-2xl shadow-blue-100/50 rounded-[2rem] overflow-hidden border border-slate-100">

        {{-- Progress Indicator (Visual Only) --}}
        <div class="bg-slate-50 border-b border-slate-100 px-8 py-4 flex items-center space-x-4">
            <div class="flex items-center text-blue-600 font-bold text-sm">
                <span
                    class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center mr-2 shadow-lg shadow-blue-200">1</span>
                Data Utama
            </div>
            <div class="h-[1px] w-12 bg-slate-200"></div>
            <div class="flex items-center text-slate-400 font-bold text-sm">
                <span
                    class="w-8 h-8 rounded-full bg-slate-200 text-white flex items-center justify-center mr-2">2</span>
                Konfirmasi
            </div>
        </div>

        <div class="p-8 md:p-12">
            {{-- Alert Success Premium --}}
            @if (session()->has('success'))
                <div
                    class="mb-8 flex items-center bg-green-50 border border-green-100 text-green-700 px-6 py-4 rounded-2xl animate-in fade-in slide-in-from-top-4">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="relative mb-12">
                <div class="flex items-center mb-8">
                    <div class="w-1.5 h-8 bg-blue-600 rounded-full mr-4"></div>
                    <h3 class="text-xl font-bold text-slate-800">Biodata Calon Siswa</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    <div class="space-y-1.5">
                        <label class="text-sm font-bold text-slate-700 ml-1">Nama Lengkap</label>
                        <input type="text" wire:model="nama_siswa" placeholder="Masukkan nama sesuai akta"
                            class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                        @error('nama_siswa')
                            <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-bold text-slate-700 ml-1">NIK (Sesuai KK)</label>
                        <input type="number" wire:model="nik" placeholder="16 Digit nomor induk"
                            class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                        @error('nik')
                            <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-bold text-slate-700 ml-1">NISN (Jika ada)</label>
                        <input type="number" wire:model="nisn" placeholder="Nomor Induk Siswa Nasional"
                            class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                        @error('nisn')
                            <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid gap-4">
                        <div class="space-y-1.5">
                            <label class="text-sm font-bold text-slate-700 ml-1">Tempat Lahir</label>
                            <input type="text" wire:model="tmp_lahir"
                                class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                            @error('tmp_lahir')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="grid gap-4">
                        <div class="space-y-1.5">
                            <label class="text-sm font-bold text-slate-700 ml-1">Tgl Lahir</label>
                            <input type="date" wire:model="tgl_lahir"
                                class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border text-slate-500 text-sm">
                            @error('tgl_lahir')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-bold text-slate-700 ml-1">Jenis Kelamin</label>
                        <select wire:model="jk_siswa"
                            class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                            <option value="">Pilih Gender</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-sm font-bold text-slate-700 ml-1">Agama</label>
                        <select wire:model="agama_siswa"
                            class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                            <option value="">Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                        </select>
                    </div>

                    <div class="grid gap-4">
                        <div class="space-y-1.5">
                            <label class="text-sm font-bold text-slate-700 ml-1">Anak Ke</label>
                            <input type="text" wire:model="anak_ke"
                                class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                            @error('anak_ke')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:col-span-2 space-y-1.5">
                        <div class="space-y-1.5">
                            <label class="text-sm font-bold text-slate-700 ml-1">Jumlah Saudara</label>
                            <input type="text" wire:model="jumlah_saudara"
                                class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                            @error('jumlah_saudara')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="md:col-span-2 space-y-1.5">
                        <label class="text-sm font-bold text-slate-700 ml-1">Alamat Domisili Lengkap</label>
                        <textarea wire:model="alamat_siswa" rows="3" placeholder="Nama jalan, RT/RW, Kecamatan, dsb."
                            class="w-full bg-slate-50 border-slate-200 rounded-xl px-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border"></textarea>
                    </div>
                </div>
            </div>

            <div class="relative pt-8 border-t border-slate-100">
                <div class="flex items-center mb-8">
                    <div class="w-1.5 h-8 bg-yellow-400 rounded-full mr-4"></div>
                    <h3 class="text-xl font-bold text-slate-800">Informasi Orang Tua / Wali</h3>
                </div>

                <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                    <div class="space-y-4 p-5 bg-slate-50/50 rounded-2xl border border-slate-100">
                        <div class="space-y-1.5">
                            <label class="text-xs uppercase tracking-wider font-extrabold text-slate-400">Data
                                Ayah</label>
                            <input type="text" wire:model="nama_ayah" placeholder="Nama Lengkap Ayah"
                                class="w-full bg-white border-slate-200 rounded-xl px-4 py-3 focus:ring-4 focus:ring-blue-100 border outline-none">
                            @error('nama_ayah')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                            <input type="text" wire:model="kerja_ayah" placeholder="Pekerjaan Ayah"
                                class="w-full bg-white border-slate-200 rounded-xl px-4 py-3 focus:ring-4 focus:ring-blue-100 border outline-none mt-2">
                            @error('kerja_ayah')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-4 p-5 bg-slate-50/50 rounded-2xl border border-slate-100">
                        <div class="space-y-1.5">
                            <label class="text-xs uppercase tracking-wider font-extrabold text-slate-400">Data
                                Ibu</label>
                            <input type="text" wire:model="nama_ibu" placeholder="Nama Lengkap Ibu"
                                class="w-full bg-white border-slate-200 rounded-xl px-4 py-3 focus:ring-4 focus:ring-blue-100 border outline-none">
                            @error('nama_ibu')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                            <input type="text" wire:model="kerja_ibu" placeholder="Pekerjaan Ibu"
                                class="w-full bg-white border-slate-200 rounded-xl px-4 py-3 focus:ring-4 focus:ring-blue-100 border outline-none mt-2">
                            @error('kerja_ibu')
                                <p class="text-red-500 text-xs mt-1 font-medium italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:col-span-2 space-y-1.5">
                        <label class="text-sm font-bold text-slate-700 ml-1">Nomor Telepon/WhatsApp Aktif</label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 font-semibold">+62</span>
                            <input type="number" wire:model="phone_ortu"
                                class="w-full bg-slate-50 border-slate-200 rounded-xl pl-14 pr-4 py-3 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all outline-none border">
                        </div>
                        @error('phone_ortu')
                            <p class="text-red-500 text-xs mt-1 italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-12 flex flex-col md:flex-row items-center justify-between gap-4 p-2">
                <p class="text-sm text-slate-400 text-center md:text-left">
                    Pastikan semua data sudah benar sebelum menekan tombol simpan.
                </p>
                <button wire:click="simpan"
                    class="group relative w-full md:w-auto overflow-hidden bg-blue-600 px-10 py-4 rounded-2xl font-bold text-white shadow-xl shadow-blue-200 hover:bg-blue-700 hover:-translate-y-1 transition-all active:translate-y-0">
                    <span class="relative z-10 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4">
                            </path>
                        </svg>
                        Simpan & Finalisasi
                    </span>
                    <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
