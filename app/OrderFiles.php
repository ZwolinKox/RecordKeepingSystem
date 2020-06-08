<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderFiles extends Model
{
    protected  $table = 'order_files';
    public $timestamps = false;
    protected $fillable = [
        'path', 'name',
    ];

    public function order(){
        return $this->belongsTo('App\Orders', 'order', 'id');
    }
}
