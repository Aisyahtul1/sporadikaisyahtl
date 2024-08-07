<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';

    /**
     * Mendefinisikan relasi antara Petugas dan Sporadik
     */
    public function sporadik(): HasMany
    {
        return $this->hasMany(Sporadik::class, 'petugas_id', 'id');
    }
}
