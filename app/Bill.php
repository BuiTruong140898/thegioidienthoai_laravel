<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    //
    protected $table = 'bills';

    public function bill_detail(){
        return $this->hasMany('App/billDetail','id_bill','id');
    }

    public function customer(){
        return $this->belongsto('App/customer','id_customer','id');
    }

}
