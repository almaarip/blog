<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ['qty','Total'];

    public function baju(){
        return $this ->belongsTo('App\Baju','baju_id','id');
    }
    public function pelanggan(){
        return $this ->belongsTo('App\Pelanggan','pelanggan_id','namapelanggan','id');
    }
}
