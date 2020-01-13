<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product_order extends Model
{
    protected $table='product_order';
    public function order(){
        return $this->belongsTo('App\models\order','order_id','id');
    }
    public $timestamps = false;
}
