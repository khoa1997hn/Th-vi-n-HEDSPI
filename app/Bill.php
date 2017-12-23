<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
    public function user(){
        return $this->belongsTo('App\User','id_user','id');
    }

    public function book(){
        return $this->belongsTo('App\User','id_book','id');
    }
}
