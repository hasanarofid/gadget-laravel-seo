<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overviewtipe extends Model
{
    use HasFactory;
    protected $table = 'overviewtipe';
    protected $fillable = ['produk_id','kategori_id', 'title','landing','diskipsi']; // Add all fields you want to be mass assignable

    public function tipe()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
