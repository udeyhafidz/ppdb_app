<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('gelombang_id')->constrained('gelombangs')->onDelete('cascade');
            $table->string('no_pendaftaran')->unique();
            $table->string('nama_siswa');
            $table->string('nisn')->nullable()->unique();
            $table->string('nik')->unique();
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->enum('jk_siswa', ['L', 'P']);
            $table->enum('agama_siswa', ['islam', 'kristen', 'hindu', 'buddha', 'konghuchu']);
            $table->string('alamat_siswa');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('nama_ayah');
            $table->string('kerja_ayah');
            $table->string('nama_ibu');
            $table->string('kerja_ibu');
            $table->string('phone_ortu');
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->enum('status_ulang', ['belum', 'pending', 'valid', 'ditolak'])->default('belum');
            $table->string('pesan_admin')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
