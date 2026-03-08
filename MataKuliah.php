<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;

    // Nama tabel di database (opsional jika nama tabel adalah matakuliahs)
    protected $table = 'matakuliahs';

    protected $fillable = [
        'kode_mk', 
        'nama_mk', 
        'sks', 
        'semester'
    ];

    /**
     * Relasi One-to-Many ke Mahasiswa
     * Satu Mata Kuliah memiliki banyak Mahasiswa
     */
    public function mahasiswas(): HasMany
    {
        // Parameter: Nama Model, Foreign Key di tabel mahasiswa, Local Key di tabel ini
        return $this->hasMany(Mahasiswa::class, 'matakuliah_id', 'id');
    }
}