<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengantaran extends Model
{
    use HasFactory;
    protected $fillable = ['nama','alamat','no_telp','tanggal','transaksi_id','status'];
    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
}
