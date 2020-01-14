<?php

namespace Water\Vular\Order\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
         return $this->belongsTo('Water\Vular\Models\Admin');
    }

    public function customer()
    {
         return $this->belongsTo('Water\Vular\Order\Models\Customer');
    }

    public function factoryOrders(){
         return $this->hasMany('Water\Vular\Order\Models\FactoryOrder');
    }

    public function fees(){
         return $this->hasMany('Water\Vular\Order\Models\Fee');
    }
}
