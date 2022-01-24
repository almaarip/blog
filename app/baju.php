<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baju extends Model
{
    protected $fillable = ['kode','nama','berat_kilogram','harga'];
}
