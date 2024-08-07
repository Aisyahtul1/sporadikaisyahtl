<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Masyarakat extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $guard = 'masyarakat';
    protected $table = 'masyarakats';
    protected $primaryKey = 'id';

    public function sporadik(): HasMany
    {
        return $this->hasMany(Sporadik::class, 'masyarakats_id', 'id');
    }
}
