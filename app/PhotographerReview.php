<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotographerReview extends Model
{
    protected $table = 'photographer_reviews';
    protected $primaryKey = 'photographerReviewID';
    protected $fillable = [
        'comment','rating','photographerID','userID'
    ];
    public function countReview($id){
        $table = Photographer::where('userID', $id)->count();
        return $table;
    }

    public function user(){
        return $this->belongsTo('App\User','userID');
    }
	
	public function photographer(){
        return $this->belongsTo('App\Photographer','photographerID');
    }
}
