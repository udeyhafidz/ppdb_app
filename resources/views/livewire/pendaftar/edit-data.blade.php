<div class="max-w-6xl mx-auto mt-12 px-4 pb-24">
    <div class="flex items-center justify-between mb-10">
        <div>
            <h2 class="text-4xl font-extrabold text-slate-800 tracking-tight">
                Edit <span class="text-blue-600">Pendaftaran</span>
            </h2>
            <p class="text-slate-500 mt-2">Pastikan data yang diubah sudah sesuai dengan dokumen asli.</p>
        </div>
        <a href="/detail" class="hidden md:flex items-center text-slate-500 hover:text-slate-800 font-bold transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>
            Kembali ke Detail
        </a>
    </div>

    @if (session()->has('success'))
        <div
            class="mb-8 flex items-center bg-emerald-50 border border-emerald-100 text-emerald-700 px-6 py-4 rounded-[2rem] animate-bounce">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="font-bold">{{ session('success') }}</span>
        </div>
    @endif

    <form wire:submit.prevent="update" class="space-y-8">

        <div
            class="bg-white shadow-[0_20px_50px_rgba(0,0,0,0.04)] rounded-[2.5rem] border border-slate-100 overflow-hidden">
            <div class="bg-blue-600 px-10 py-6 flex items-center justify-between">
                <h3 class="text-xl font-bold text-white flex items-center">
                    <svg class="w-6 h-6 mr-3 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Informasi Dasar Siswa
                </h3>
                <span class="text-blue-200 text-xs font-black uppercase tracking-widest">Bagian 01</span>
            </div>

            <div class="p-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-2 space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Nama
                            Lengkap</label>
                        <input type="text" wire:model.blur="nama_siswa"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all @error('nama_siswa') border-red-500 @enderror">
                        @error('nama_siswa')
                            <span class="text-red-500 text-xs font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">NISN</label>
                        <input type="text" wire:model="nisn"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">NIK</label>
                        <input type="text" wire:model="nik"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Tempat
                            Lahir</label>
                        <input type="text" wire:model="tmp_lahir"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all">
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Tanggal
                            Lahir</label>
                        <input type="date" wire:model.blur="tgl_lahir"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all @error('tgl_lahir') border-red-500 @enderror">
                        @error('tgl_lahir')
                            <span class="text-red-500 text-xs font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Jenis
                            Kelamin</label>
                        <select wire:model="jk_siswa"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all">
                            <option value="">Pilih...</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Agama</label>
                        <select wire:model="agama_siswa"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all">
                            <option value="">Pilih...</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Anak
                                Ke</label>
                            <input type="number" wire:model="anak_ke"
                                class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 border outline-none">
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Saudara</label>
                            <input type="number" wire:model="jumlah_saudara"
                                class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 border outline-none">
                        </div>
                    </div>

                    <div class="md:col-span-3 space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Alamat
                            Lengkap</label>
                        <textarea wire:model="alamat_siswa" rows="3"
                            class="w-full bg-slate-50 border-slate-200 rounded-2xl px-5 py-3.5 focus:ring-4 focus:ring-blue-100 focus:bg-white border outline-none transition-all"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="bg-white shadow-[0_20px_50px_rgba(0,0,0,0.04)] rounded-[2.5rem] border border-slate-100 overflow-hidden">
            <div class="bg-emerald-500 px-10 py-6 flex items-center justify-between">
                <h3 class="text-xl font-bold text-white flex items-center">
                    <svg class="w-6 h-6 mr-3 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Data Orang Tua
                </h3>
                <span class="text-emerald-100 text-xs font-black uppercase tracking-widest">Bagian 02</span>
            </div>

            <div class="p-10">
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="space-y-4 p-6 bg-slate-50 rounded-[2rem] border border-slate-100">
                        <label class="text-xs font-black text-emerald-600 uppercase tracking-widest block mb-2">Ayah
                            Kandung</label>
                        <input type="text" wire:model="nama_ayah" placeholder="Nama Lengkap"
                            class="w-full bg-white border-slate-200 rounded-xl px-5 py-3 border outline-none focus:ring-4 focus:ring-emerald-100">
                        <input type="text" wire:model="kerja_ayah" placeholder="Pekerjaan"
                            class="w-full bg-white border-slate-200 rounded-xl px-5 py-3 border outline-none focus:ring-4 focus:ring-emerald-100">
                    </div>

                    <div class="space-y-4 p-6 bg-slate-50 rounded-[2rem] border border-slate-100">
                        <label class="text-xs font-black text-rose-500 uppercase tracking-widest block mb-2">Ibu
                            Kandung</label>
                        <input type="text" wire:model="nama_ibu" placeholder="Nama Lengkap"
                            class="w-full bg-white border-slate-200 rounded-xl px-5 py-3 border outline-none focus:ring-4 focus:ring-rose-100">
                        <input type="text" wire:model="kerja_ibu" placeholder="Pekerjaan"
                            class="w-full bg-white border-slate-200 rounded-xl px-5 py-3 border outline-none focus:ring-4 focus:ring-rose-100">
                    </div>

                    <div class="md:col-span-2 space-y-2">
                        <label class="text-xs font-black uppercase tracking-wider text-slate-400 ml-1">Nomor Telepon
                            (WhatsApp)</label>
                        <div class="flex group">
                            <span
                                class="bg-slate-200 border border-r-0 border-slate-200 rounded-l-2xl px-5 py-3.5 flex items-center font-bold text-slate-500">+62</span>
                            <input type="text" wire:model="phone_ortu"
                                class="flex-1 border-slate-200 border rounded-r-2xl px-5 py-3.5 outline-none focus:ring-4 focus:ring-blue-100 @error('phone_ortu') border-red-500 @enderror">
                        </div>
                        @error('phone_ortu')
                            <span class="text-red-500 text-xs font-bold">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4 items-center justify-end pt-6">
            <a href="/detail"
                class="w-full md:w-auto px-10 py-4 font-bold text-slate-500 hover:text-slate-800 transition text-center">
                Batal & Keluar
            </a>
            <button type="submit"
                class="w-full md:w-auto bg-slate-900 hover:bg-black text-white px-12 py-4 rounded-2xl font-bold shadow-2xl shadow-slate-200 transition-all hover:-translate-y-1 active:translate-y-0">
                💾 Simpan Perubahan Data
            </button>
        </div>

    </form>
</div>
