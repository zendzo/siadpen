<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['name'];

    public function guru()
    {
        return $this->belongsToMany(Guru::class, 'guru_kelas');
    }
}
