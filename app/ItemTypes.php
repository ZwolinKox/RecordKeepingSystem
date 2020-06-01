<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ItemTypes extends Model
{
    use Notifiable;
    protected  $table = 'item_types';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function orders(){
        return $this->hasMany('App\Orders', 'item_type', 'id');
    }
}
