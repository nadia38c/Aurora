<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $table = 'photographers';
    protected $primaryKey = 'photographerID';
    protected $fillable = ['name', 'designation', 'slug','phone','email','description', 'facebook','twitter','instagram'];

    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function totalUser($id){
        $table = PhotographerReview::where('photographerID', $id)->count('userID');
        return $table;
    }
    public function ratingTotal($id){
        $table = PhotographerReview::where('photographerID', $id)->sum('rating');
        return $table;
    }
    public function ratings()
    {
        return $this->hasMany('App\PhotographerReview','photographerID');
    }


}
