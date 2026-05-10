<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Pendaftar extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pendaftar) {

            DB::transaction(function () use ($pendaftar) {

            $year = date('Y');

            $last = DB::table('pendaftars')
                ->lockForUpdate()
                ->whereYear('created_at', $year)
                ->orderBy('id', 'desc')
                ->first();

            if ($last) {
                $lastNumber = intval(
                    substr($last->no_pendaftaran, -4)
                ) + 1;
            } else {
                $lastNumber = 1;
            }

            $pendaftar->no_pendaftaran =
                'PPDB-' .
                $year . '-' .
                str_pad($lastNumber, 4, '0', STR_PAD_LEFT);

            });

        });
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function gelombang() {
        return $this->belongsTo(Gelombang::class);
    }

    public function berkas() {
        return $this->hasMany(Berkas::class);
    }

    public function umuman() {
        return $this->belongsTo(Pengumumen::class);
    }

    public function daftarulang() {
        return $this->hasMany(DaftarUlang::class);
    }
}
