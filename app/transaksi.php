<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table='transaksi';
    protected $fillable=['id_barang','id_customer','jumlah','total'];
}
