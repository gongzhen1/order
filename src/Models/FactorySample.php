<?php

namespace Water\Vular\Order\Models;

use Illuminate\Database\Eloquent\Model;

class FactorySample extends Model
{
    public function user()
    {
         return $this->belongsTo('Water\Vular\Models\Admin');
    }

    public function supplier()
    {
         return $this->belongsTo('Water\Vular\Order\Models\Supplier');
    }

    public function sample(){
         return $this->belongsTo('Water\Vular\Order\Models\Sample');
    }
}
