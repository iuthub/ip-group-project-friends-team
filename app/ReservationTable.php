<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationTable extends Model
{
    protected $fillable = ['day', 'hour', 'name', 'tel_number', 'people'];
}
