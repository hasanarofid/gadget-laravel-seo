<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Artikel extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'artikel';
    protected $fillable = ['judul', 'slug','konten']; // Add all fields you want to be mass assignable


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('judul')
            ->saveSlugsTo('slug');
    }


}
