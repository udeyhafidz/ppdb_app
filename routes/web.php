<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\DaftarUlangForm;
use App\Livewire\FormDaftar;
use App\Livewire\Home;
use App\Livewire\Jadwal;
use App\Livewire\Pendaftar\Detail;
use App\Livewire\Pendaftar\EditData;
use App\Livewire\Pengumuman;
use App\Livewire\Profile;
use App\Livewire\StatistikChart;
use App\Livewire\UploadBerkas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::get('/register', Register::class)->name('register')->middleware('guest');
Route::get('/pengumuman', Pengumuman::class)->name('pengumuman');
Route::get('/jadwal', Jadwal::class)->name('jadwal');
Route::get('statistik', StatistikChart::class)->name('statistik.cart');

Route::middleware(['auth'])->group(function () {
    Route::get('/detail', Detail::class)->name('detail.siswa');
    Route::get('/edit-data', EditData::class)->name('edit.data');
    Route::get('/profile', Profile::class)->name('profile');
    
    Route::get('/pendaftaran', FormDaftar::class)->name('pendaftaran');
    Route::get('/daftar-ulang', DaftarUlangForm::class)->name('daftar.ulang');
    Route::get('/ulang/{file}', function ($file) {

        if (!auth()->check()) {
            abort(403);
        }

        if (!Storage::exists($file)) {
            abort(404);
        }

        return Storage::response($file);
    })->where('file', '.*')->name('ulang.berkas');
    
    Route::get('/pendaftaran/upload-berkas', UploadBerkas::class)->name('upload.berkas');
});

Route::view('/panduan', 'panduan')
    ->name('panduan');

Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/login');
})->name('logout');
