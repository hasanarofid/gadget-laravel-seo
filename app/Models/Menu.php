<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Menu extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'menu';
    protected $fillable = ['nama', 'slug']; // Add all fields you want to be mass assignable

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nama')
            ->saveSlugsTo('slug');
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }

    public function subMenus()
    {
        return $this->hasMany(SubMenu::class);
    }
    
}
