<?php

namespace Water\Vular\Order\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    public function user()
    {
         return $this->belongsTo('Water\Vular\Models\Admin');
    }

    //public function admins()
    //{
    //     return $this->belongsToMany('Water\Vular\Models\Admin');
    //}
}
