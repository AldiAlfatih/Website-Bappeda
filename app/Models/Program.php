<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $table = 'program';
    protected $fillable = ['nama', 'kode'];

    public function kegiatan():HasMany
    {
        return $this->hasMany(Kegiatan::class, 'kegiatan_id');
    }
}

