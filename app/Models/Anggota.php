<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Anggota extends Model
{
    protected $table = 'anggota';

    // ACCESSOR STATUS BADGE
    public function getStatusBadgeAttribute(): string
    {
        return $this->status == 'Aktif'
            ? '<span class="badge bg-success">Aktif</span>'
            : '<span class="badge bg-secondary">Nonaktif</span>';
    }

    // ACCESSOR KATEGORI USIA
    public function getKategoriUsiaAttribute(): string
    {
        if ($this->umur < 20) {
            return 'Remaja';
        } elseif ($this->umur >= 20 && $this->umur <= 50) {
            return 'Dewasa';
        } else {
            return 'Senior';
        }
    }

    // SCOPE JENIS KELAMIN
    public function scopeJenisKelamin($query, $jk)
    {
        return $query->where('jenis_kelamin', $jk);
    }

    // SCOPE TERDAFTAR BULAN INI
    public function scopeTerdaftarBulanIni($query)
    {
        return $query->whereMonth('created_at', Carbon::now()->month)
                     ->whereYear('created_at', Carbon::now()->year);
    }
}