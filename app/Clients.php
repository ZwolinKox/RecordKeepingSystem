<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use Notifiable;
    protected $hidden = ['pivot'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'private', 'phone1', 'phone2', 'email1', 'email2', 'address', 'send_sms', 'send_email', 'created_at', 'updated_at'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'updated_at' => 'datetime',
        'created_at' => 'datetime'
    ];

    public function notes(){
        return $this->hasMany('App\ClientNotes','client','id');
    }

    public function groups(){
        return $this->belongsToMany('App\Groups', 'clients_groups','client','group');
    }

    public function orders(){
        return $this->hasMany('App\Orders', 'client', 'id');
    }
 }