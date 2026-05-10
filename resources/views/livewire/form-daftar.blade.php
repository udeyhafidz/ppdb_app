<div class="min-h-screen bg-[#f8fafc] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">

    <!-- Background Ornaments (Subtle) -->
    <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-blue-600/10 to-transparent pointer-events-none">
    </div>
    <div class="absolute top-20 -left-40 w-96 h-96 bg-blue-400/20 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute top-40 -right-40 w-96 h-96 bg-indigo-400/20 rounded-full blur-[100px] pointer-events-none">
    </div>

    <div class="max-w-6xl mx-auto relative z-10">

        <!-- Header Section -->
        <div class="mb-12 text-center">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight mb-4">
                Formulir <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Pendaftaran</span>
            </h2>
            <p class="text-lg text-slate-500 font-medium max-w-2xl mx-auto">Lengkapi data calon siswa dengan teliti.
                Pastikan data sesuai dengan dokumen resmi (Kartu Keluarga & Akta Kelahiran).</p>
        </div>

        <!-- Main Card -->
        <div
            class="bg-white shadow-[0_20px_60px_-15px_rgba(0,0,0,0.05)] rounded-[2.5rem] overflow-hidden border border-slate-100/60 ring-1 ring-slate-900/5">

            {{-- Progress Indicator --}}
            <div
                class="bg-slate-50/80 backdrop-blur-sm border-b border-slate-100 px-8 py-5 flex items-center justify-center sm:justify-start space-x-4 md:space-x-6">
                <div class="flex items-center text-blue-600 font-bold text-base">
                    <span
                        class="w-10 h-10 rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white flex items-center justify-center mr-3 shadow-lg shadow-blue-600/20 text-lg">1</span>
                    Data Utama
                </div>
                <div class="h-[2px] w-16 bg-slate-200 rounded-full"></div>
                <div class="flex items-center text-slate-400 font-bold text-base opacity-70">
                    <span
                        class="w-10 h-10 rounded-2xl bg-slate-200 text-slate-500 flex items-center justify-center mr-3 text-lg">2</span>
                    Konfirmasi
                </div>
            </div>

            <div class="p-8 md:p-14 lg:p-16">

                {{-- Alert Success Premium --}}
                @if (session()->has('success'))
                    <div
                        class="mb-10 flex items-start bg-emerald-50 border border-emerald-200/60 text-emerald-700 px-6 py-5 rounded-2xl shadow-sm shadow-emerald-100">
                        <svg class="w-7 h-7 mr-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <h4 class="font-bold text-emerald-800 text-lg">Berhasil!</h4>
                            <p class="font-medium text-emerald-600 mt-0.5">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif

                <!-- SECTION 1: BIODATA -->
                <div class="relative mb-16">
                    <div class="flex items-center mb-10">
                        <div
                            class="w-2 h-10 bg-gradient-to-b from-blue-500 to-indigo-600 rounded-full mr-5 shadow-lg shadow-blue-500/30">
                        </div>
                        <h3 class="text-2xl font-extrabold text-slate-800 tracking-tight">Biodata Calon Siswa</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-8">

                        <!-- Nama Lengkap (Full Width on Mobile, 1 Col on Desktop) -->
                        <div class="space-y-2 md:col-span-2 lg:col-span-1">
                            <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Nama Lengkap Sesuai
                                Akta</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" wire:model="nama_siswa" placeholder="Ketik nama lengkap..."
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl pl-12 pr-4 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none placeholder:text-slate-400">
                            </div>
                            @error('nama_siswa')
                                <p class="text-red-500 text-sm mt-1.5 ml-1 font-semibold flex items-center gap-1"><svg
                                        class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- NIK -->
                        <div class="space-y-2">
                            <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">NIK (Nomor Induk
                                Kependudukan)</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                                        </path>
                                    </svg>
                                </div>
                                <input type="number" wire:model="nik" placeholder="16 Digit NIK di KK"
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl pl-12 pr-4 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none placeholder:text-slate-400">
                            </div>
                            @error('nik')
                                <p class="text-red-500 text-sm mt-1.5 ml-1 font-semibold flex items-center gap-1"><svg
                                        class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- NISN & Jenis Kelamin (1 Row on Desktop) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 md:col-span-2">
                            <div class="space-y-2">
                                <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">NISN (Jika
                                    Ada)</label>
                                <input type="number" wire:model="nisn" placeholder="Nomor Induk Siswa Nasional"
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none placeholder:text-slate-400">
                                @error('nisn')
                                    <p class="text-red-500 text-sm mt-1.5 ml-1 font-semibold">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Jenis Kelamin</label>
                                <select wire:model="jk_siswa"
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%24%2024%22%20fill%3D%22none%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpolyline%20points%3D%226%209%2012%2015%2018%209%22%3E%3C%2Fpolyline%3E%3C%2Fsvg%3E')] bg-[position:right_1rem_center] bg-no-repeat pr-12">
                                    <option value="">-- Pilih Gender --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tempat & Tanggal Lahir -->
                        <div class="space-y-2">
                            <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Tempat Lahir</label>
                            <input type="text" wire:model="tmp_lahir" placeholder="Kota/Kabupaten kelahiran"
                                class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none placeholder:text-slate-400">
                            @error('tmp_lahir')
                                <p class="text-red-500 text-sm mt-1.5 ml-1 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Tanggal Lahir</label>
                            <input type="date" wire:model="tgl_lahir"
                                class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-700 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none">
                            @error('tgl_lahir')
                                <p class="text-red-500 text-sm mt-1.5 ml-1 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Agama, Anak Ke, Jumlah Saudara -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 md:col-span-2">
                            <div class="space-y-2">
                                <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Agama</label>
                                <select wire:model="agama_siswa"
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none">
                                    <option value="">Pilih Agama</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Anak Ke-</label>
                                <input type="number" wire:model="anak_ke" placeholder="Misal: 1"
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none placeholder:text-slate-400">
                                @error('anak_ke')
                                    <p class="text-red-500 text-sm mt-1.5 ml-1 font-semibold">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Jumlah
                                    Saudara</label>
                                <input type="number" wire:model="jumlah_saudara" placeholder="Misal: 2"
                                    class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none placeholder:text-slate-400">
                                @error('jumlah_saudara')
                                    <p class="text-red-500 text-sm mt-1.5 ml-1 font-semibold">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="space-y-2 md:col-span-2">
                            <label class="text-sm font-bold tracking-wide text-slate-700 ml-1">Alamat Domisili
                                Lengkap</label>
                            <textarea wire:model="alamat_siswa" rows="3"
                                placeholder="Nama Jalan, RT/RW, Desa/Kelurahan, Kecamatan, Kode Pos..."
                                class="w-full bg-slate-50/50 border border-slate-200 rounded-2xl px-5 py-4 text-base font-medium text-slate-800 focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all outline-none placeholder:text-slate-400 resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: ORANG TUA -->
                <div class="relative pt-12 border-t-2 border-slate-100 border-dashed">
                    <div class="flex items-center mb-10">
                        <div
                            class="w-2 h-10 bg-gradient-to-b from-amber-400 to-orange-500 rounded-full mr-5 shadow-lg shadow-amber-500/30">
                        </div>
                        <h3 class="text-2xl font-extrabold text-slate-800 tracking-tight">Informasi Orang Tua / Wali
                        </h3>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">

                        <!-- Card Data Ayah -->
                        <div
                            class="bg-slate-50/80 border border-slate-200/80 rounded-[2rem] p-6 sm:p-8 relative overflow-hidden group hover:border-blue-300 transition-colors">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-bl-[100px] -mr-10 -mt-10 opacity-50 pointer-events-none">
                            </div>

                            <h4
                                class="text-sm uppercase tracking-[0.2em] font-black text-slate-400 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Data Ayah
                            </h4>
                            <div class="space-y-5 relative z-10">
                                <div>
                                    <input type="text" wire:model="nama_ayah" placeholder="Nama Lengkap Ayah"
                                        class="w-full bg-white border border-slate-200 rounded-xl px-5 py-3.5 text-base font-medium focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all placeholder:text-slate-400">
                                    @error('nama_ayah')
                                        <p class="text-red-500 text-sm mt-1 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" wire:model="kerja_ayah" placeholder="Pekerjaan Ayah"
                                        class="w-full bg-white border border-slate-200 rounded-xl px-5 py-3.5 text-base font-medium focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all placeholder:text-slate-400">
                                    @error('kerja_ayah')
                                        <p class="text-red-500 text-sm mt-1 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Card Data Ibu -->
                        <div
                            class="bg-slate-50/80 border border-slate-200/80 rounded-[2rem] p-6 sm:p-8 relative overflow-hidden group hover:border-rose-300 transition-colors">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-rose-100 rounded-bl-[100px] -mr-10 -mt-10 opacity-50 pointer-events-none">
                            </div>

                            <h4
                                class="text-sm uppercase tracking-[0.2em] font-black text-slate-400 mb-6 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-rose-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Data Ibu
                            </h4>
                            <div class="space-y-5 relative z-10">
                                <div>
                                    <input type="text" wire:model="nama_ibu" placeholder="Nama Lengkap Ibu"
                                        class="w-full bg-white border border-slate-200 rounded-xl px-5 py-3.5 text-base font-medium focus:ring-2 focus:ring-rose-500/20 focus:border-rose-500 outline-none transition-all placeholder:text-slate-400">
                                    @error('nama_ibu')
                                        <p class="text-red-500 text-sm mt-1 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" wire:model="kerja_ibu" placeholder="Pekerjaan Ibu"
                                        class="w-full bg-white border border-slate-200 rounded-xl px-5 py-3.5 text-base font-medium focus:ring-2 focus:ring-rose-500/20 focus:border-rose-500 outline-none transition-all placeholder:text-slate-400">
                                    @error('kerja_ibu')
                                        <p class="text-red-500 text-sm mt-1 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- No Telepon / WA -->
                        <div class="space-y-2 md:col-span-2 lg:w-1/2 lg:mx-auto mt-4">
                            <label
                                class="text-sm font-bold tracking-wide text-slate-700 ml-1 text-center block md:text-left lg:text-center">Nomor
                                Telepon / WhatsApp Aktif</label>
                            <div
                                class="relative flex shadow-sm rounded-2xl overflow-hidden focus-within:ring-4 focus-within:ring-green-500/20 border border-slate-200 transition-all">
                                <span
                                    class="flex items-center justify-center px-5 bg-slate-100 border-r border-slate-200 text-slate-600 font-bold text-lg">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg"
                                        class="w-6 h-4 mr-2 object-cover rounded-sm" alt="ID"> +62
                                </span>
                                <input type="number" wire:model="phone_ortu" placeholder="81234567890"
                                    class="w-full bg-slate-50/50 px-5 py-4 text-lg font-bold text-slate-800 outline-none placeholder:text-slate-300 placeholder:font-medium tracking-wider">
                            </div>
                            @error('phone_ortu')
                                <p class="text-red-500 text-sm mt-1.5 text-center font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- SECTION 3: SUBMIT BUTTON -->
                <div class="mt-16 pt-10 border-t border-slate-100 flex flex-col items-center justify-center space-y-6">
                    <p class="text-base text-slate-500 text-center font-medium max-w-lg">
                        Dengan menekan tombol di bawah, Anda menyatakan bahwa data yang diisi adalah <span
                            class="text-slate-800 font-bold">benar dan valid</span>.
                    </p>

                    <button wire:click="simpan"
                        class="group relative w-full sm:w-auto overflow-hidden bg-gradient-to-r from-blue-600 to-indigo-600 px-12 py-5 rounded-[1.5rem] font-black text-white text-lg shadow-[0_10px_40px_-10px_rgba(79,70,229,0.5)] hover:shadow-[0_20px_50px_-10px_rgba(79,70,229,0.7)] transition-all duration-300 hover:-translate-y-1 active:translate-y-0 active:scale-95">
                        <span class="relative z-10 flex items-center justify-center tracking-wide">
                            <svg class="w-6 h-6 mr-3 group-hover:animate-bounce" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4">
                                </path>
                            </svg>
                            SIMPAN & FINALISASI DATA
                        </span>
                        <!-- Glossy Effect Hover -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000 ease-in-out">
                        </div>
                    </button>
                </div>

            </div>
        </div>

        <!-- Footer Form -->
        <div class="text-center mt-8 text-slate-400 text-sm font-medium pb-10">
            Sistem Penerimaan Peserta Didik Baru &copy; {{ date('Y') }}
        </div>
    </div>
</div>
