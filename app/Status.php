<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status', 'created_by', 'order', 'date'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function order(){
        return $this->belongsTo('App\Orders', 'order', 'id');
    }
}
