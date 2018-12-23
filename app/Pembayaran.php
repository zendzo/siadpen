<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Carbon\Carbon;

class Pembayaran extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $fillable = ['siswa_id','pay_date','total'];

    public function setPayDateAttribute($value)
    {
        $this->attributes['pay_date'] = Carbon::createFromFormat('d-m-Y',$value)->toDateString();
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
