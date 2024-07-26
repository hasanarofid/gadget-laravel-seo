<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class SubMenu extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'menu_id', 'kategori_title', 'slug', 'sub', 'artikel_id'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('kategori_title')
            ->saveSlugsTo('slug');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
}
