<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class CenematographyPackage extends Model
{
    protected $table = 'cenematography_packages';
    protected $primaryKey = 'cinepackageID';
    protected $fillable = ['packageName', 'raw_footage', 'slug', 'edited_video', 'videographers','vdo_quality','hours','amount'];

    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'packageName'
            ]
        ];
    }
}
