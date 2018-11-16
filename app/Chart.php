<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    public $table = 'pie_charts';
    public $fillable = ['id', 'sport', 'fans','player'];

    public $timestamps = false;
    protected $softDelete = false;
}
