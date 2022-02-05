<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baju extends Model
{
    protected $table = 'bajus';
    protected $fillable = ['kode','nama','berat_kilogram','harga'];

    public function bajus(){
        return $this ->hasMany('App\Pembayaran'.'baju_id','id');
    }
}
