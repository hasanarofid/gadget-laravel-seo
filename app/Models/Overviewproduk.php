<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overviewproduk extends Model
{
    use HasFactory;
    protected $table = 'overviewproduk';
    protected $fillable = ['produk_id', 'title','landing','diskipsi']; // Add all fields you want to be mass assignable

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

}
