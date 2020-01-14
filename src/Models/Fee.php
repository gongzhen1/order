<?php

namespace Water\Vular\Order\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public function order(){
         return $this->belongsTo('Water\Vular\Order\Models\Order');
    }
}
