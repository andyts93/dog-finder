<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Ad extends Model
{
    use HasFactory, HasSlug;

    protected $casts = [
        'dog_breeds' => 'array'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->preventOverwrite()
            ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $guarded = [];

    public function getNormalizedDogAgeAttribute()
    {
        $years = round($this->dog_age / 12);
        $months = $this->dog_age % 12;

        if ($years > 0) {
            return $years . ' anni';
        }

        return $months . ' mesi';
    }
}
