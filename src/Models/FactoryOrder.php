<?php

namespace Water\Vular\Order\Models;

use Illuminate\Database\Eloquent\Model;

class FactoryOrder extends Model
{
    public function supplier()
    {
         return $this->belongsTo('Water\Vular\Order\Models\Supplier');
    }

    public function order(){
         return $this->belongsTo('Water\Vular\Order\Models\Order');
    }
}
