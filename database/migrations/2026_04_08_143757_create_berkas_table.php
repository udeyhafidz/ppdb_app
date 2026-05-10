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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftar_id')->constrained('pendaftars')->onDelete('cascade');
            $table->string('jenis_berkas');
            $table->string('file');
            $table->enum('status_berkas', ['pending', 'valid', 'ditolak'])->default('pending');
            $table->string('catatan_admin')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->unique([
                'pendaftar_id',
                'jenis_berkas',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
