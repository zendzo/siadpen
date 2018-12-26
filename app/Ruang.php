<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $fillable = ['name'];

    public function guru()
    {
        return $this->belongsToMany(Guru::class, 'guru_ruang');
    }
}
