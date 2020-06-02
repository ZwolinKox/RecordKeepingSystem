<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class OrderNotes extends Model
{
    use Notifiable;
    protected  $table = 'order_nodes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user', 'order', 'text'
    ];

    public function user(){
        return $this->belongsTo('App/Users', 'user', 'id');
    }

    public function order(){
        return $this->belongsTo('App/Orders', 'order', 'id');
    }
}
