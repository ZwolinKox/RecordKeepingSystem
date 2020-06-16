<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use Notifiable;

    public $timestamps = false;
    protected $hidden = ['clientRelation', 'itemTypeRelation', 'assignedRelation'];
    protected $appends = ['status', 'client_name', 'item_type_name', 'assigned_name'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'created_by', 'assigned',
        'client', 'item_type', 'producer', 'model',
        'serial_number', 'buy_date', 'warranty_number', 'begin_date',
        'end_date', 'info', 'issue', 'delivery_method', 'pickup_method',
        'estimated_price', 'advance_pay',
    ];

    public function itemTypeRelation(){
        return $this->belongsTo('App\ItemTypes', 'item_type', 'id');
    }

    public function assignedRelation(){
        return $this->belongsTo('App\User', 'assigned', 'id');
    }

    public function clientRelation(){
        return $this->belongsTo('App\Clients', 'client', 'id');
    }

    public function createdByRelation(){
        return dd($this->belongsTo('App\User', 'created_by', 'id'));
    }

    public function orderNotesRelation(){
        return $this->hasMany('App\OrderNotes', 'order', 'id');
    }

    public function statuses(){
        return $this->hasMany('App\Status', 'order', 'id');
    }

    public function status(){
        return $this->statuses()->latest('date')->first()->status;
    }

    public function getStatusAttribute(){
        return $this->attributes['status'] = $this->status();
    }

    public function getClientNameAttribute(){
       return $this->attributes['client_name'] = $this->clientRelation->name;
    }

    public function getItemTypeNameAttribute(){
        return $this->attributes['item_type_name'] = $this->itemTypeRelation->name;
    }

    public function getAssignedNameAttribute(){
        $assigned = $this->assignedRelation;
        if($assigned != null){
            return $this->attributes['assigned_name'] = $assigned->name;
        }
        return $this->attributes['assigned_name'] = null;
    }

    public function files(){
        return $this->hasMany('App\OrderFiles', 'order', 'id');
    }
}
