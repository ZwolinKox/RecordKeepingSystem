<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    protected  $table = 'scheme';
    public $timestamps = false;

    protected $fillable = [
        'scheme', 'cycle', 'total_number', 'day_number', 'week_number', 'month_number', 'year_number', 'last_date'
    ];
}
