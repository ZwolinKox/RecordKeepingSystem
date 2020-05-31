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

    public function clients(){
        return $this->belongsToMany('App\Clients', 'clients_groups','group','client');
    }
}
