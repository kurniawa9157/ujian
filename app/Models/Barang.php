<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Barang extends Model
{
    use HasFactory;
    protected $table="barang";

    protected $fillable = ['namabarang','sku','harga','kategori_id'];

    public function getKategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }
}
