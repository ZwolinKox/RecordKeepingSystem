<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use Notifiable;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name'
    ];

    public function clients(){
        return $this->belongsToMany('App\Clients', 'clients_groups','group','client');
    }
}
