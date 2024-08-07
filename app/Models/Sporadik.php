<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sporadik extends Model
{
    use HasFactory;

    // Menentukan bahwa tabel utama adalah 'sporadiks'
    protected $table = 'sporadiks';

    // Menentukan primary key jika tidak menggunakan 'id'
    protected $primaryKey = 'id';

    /**
     * Mendefinisikan relasi antara Sporadik dan Masyarakat
     */
    public function masyarakat(): BelongsTo
    {
        return $this->belongsTo(Masyarakat::class, 'masyarakats_id', 'id');
    }

    /**
     * Mendefinisikan relasi antara Sporadik dan Petugas
     */
    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Petugas::class, 'petugas_id', 'id');
    }
}
