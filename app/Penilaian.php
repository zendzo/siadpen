<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Carbon\Carbon;

class Penilaian extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'siswa_id',
        'absensi',
        'quiz',
        'uts',
        'uas',
        'penilaian_date'
    ];

    public function setPenilaianDateAttribute($value)
    {
        $this->attributes['penilaian_date'] = Carbon::createFromFormat('d-m-Y',$value)->toDateString();
    }
    
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
