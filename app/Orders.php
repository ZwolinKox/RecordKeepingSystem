<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'status', 'created_by', 'assigned',
        'client', 'item_type', 'producer', 'model',
        'serial_number', 'buy_date', 'warranty_number', 'begin_date',
        'end_date', 'info', 'issue', 'delivery_method', 'pickup_method',
        'estimated_price', 'advance_pay'
    ];

    public function itemType(){
        return $this->belongsTo('App\ItemTypes', 'item_type', 'id');
    }

    public function assigned(){
        return $this->belongsTo('App\User', 'assigned', 'id');
    }

    public function client(){
        return $this->belongsTo('App\Clients', 'client', 'id');
    }

    public function createdBy(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function orderNotes(){
        return $this->hasMany('App/OrderNotes', 'order', 'id');
    }

    public function statuses(){
        return $this->hasMany('App\Status', 'order', 'id');
    }

    public function status(){
        return $this->statuses()->latest('date')->first();
    }
}
