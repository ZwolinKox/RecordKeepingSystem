<?php

namespace App;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function clientNodes(){
        return $this->hasMany('App\ClientNodes','user','id');
    }

    public function assigned(){
        return $this->hasMany('App\Orders', 'assigned', 'id');
    }

    public function orders(){
        return $this->hasMany('App\Orders', 'created_by', 'id');
    }

    public function orderNotes(){
        return $this->hasMany('App\OrderNotes', 'user', 'id');
    }

    public function statuses(){
        return $this->hasMany('App\Status', 'user', 'id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
 }