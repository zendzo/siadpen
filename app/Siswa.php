<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Siswa extends Model
{
    protected $fillable = [
       'nis',
       'name',
        'tingkat_id',
        'kelas_id',
        'ruang_id',
        'registered_at',
       'biaya',
    ];

    protected $dates = ['registered_at'];

    public function setRegisteredAtAttribute($value)
	{
		$this->attributes['registered_at'] = Carbon::createFromFormat('d-m-Y',$value)->toDateString();
    }
    
    public function tingkat()
    {
        return $this->belongsTo(Tingkat::class);
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
