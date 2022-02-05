<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $fillable = ['namapelanggan','no','alamat'];

    public function pelanggans(){
        return $this ->hasMany('App\Pembayaran'.'pelanggan_id','id');
    }
}
