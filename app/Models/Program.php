<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $table = 'program';
    protected $fillable = ['nama', 'kode', 'program_id'];

    public function subkegiatan(): HasMany
    {
        return $this->hasMany(SubKegiatan::class, 'kegiatan_id');
    }
}
