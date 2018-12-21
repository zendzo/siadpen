<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //

    public function ruang()
    {
        return $this->belongsToMany(Ruang::class, 'guru_ruang');
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelass::class, 'guru_kelas');
    }
}
