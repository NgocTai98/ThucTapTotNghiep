<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   protected $table='category';
   public function product(){
       return $this->hasMany('App\models\product','category_id','id');
   }
   public $timestamps = false;
    
}
