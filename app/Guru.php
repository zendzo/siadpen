<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Guru extends Model
{
    protected $fillable = [
        'code',
        'first_name',
        'last_name',
        'birth_date',
        'registered_at',
        'gender_id',
        'phone',
        'address',
        'user_id'
    ];
    public function setRegisteredAtAttribute($value)
	{
		$this->attributes['registered_at'] = Carbon::createFromFormat('d-m-Y',$value)->toDateString();
    }

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::createFromFormat('d-m-Y',$value)->toDateString();
    }

    public function ruang()
    {
        return $this->belongsToMany(Ruang::class, 'guru_ruang');
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'guru_kelas');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
