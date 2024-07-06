<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['nama','tanggal','service_id','harga'];
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
