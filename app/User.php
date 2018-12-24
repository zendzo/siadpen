<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute()
    {
        return $this->profile ? ucfirst($this->profile->first_name).' '.ucfirst($this->profile->last_name) : $this->username;
    }

    public function getAvatarAttribute()
	{
       return sprintf('https://www.gravatar.com/avatar/%s?s=100',md5($this->email));
	}

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function profile()
    {
        if ($this->role_id === 2) {
            return $this->hasOne(Guru::class);
        }elseif ($this->role_id === 3) {
            return $this->hasOne(Siswa::class);
        }
        return $this->hasOne(UserProfile::class);
    }
}
