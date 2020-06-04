<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ClientNotes extends Model
{
    use Notifiable;
    protected  $table = 'client_notes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'client', 'text'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime'
    ];

    public function client(){
        return $this->belongsTo('App/Clients', 'client', 'id');
    }

    public function user(){
        return $this->belongsTo('App/User', 'user', 'id');
    }
}
