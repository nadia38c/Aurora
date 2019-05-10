<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PhotographyPackage extends Model
{
    protected $table = 'photography_packages';
    protected $primaryKey = 'photoPackageID';
    protected $fillable = ['packageName', 'type', 'slug', 'total_print', 'photo_shoot','imported_album','hours','amount','poster_photo','bridal_story','photo_movie','desk_calender','photographers'];

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
