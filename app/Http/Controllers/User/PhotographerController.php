<?php

namespace App\Http\Controllers\User;

use App\Photographer;
use App\PhotographerReview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PhotographerController extends Controller
{

    public function index(){
		$table = Photographer::withCount(['ratings as average_rating' => function($query) {
					$query->select(DB::raw('coalesce(avg(rating),0)'));
				}])->orderByDesc('average_rating')->get();
        return view('user.photographers')->with(['table' => $table]);
    }

    public function photographer_details($id){
        //$check = PhotographerReview::select('userID')->where('userID',Auth::user()->id)->where('photographerID',$id)->first();
        $table = Photographer::find($id);
        $count = PhotographerReview::where('photographerID',$id)->count();
        $review = PhotographerReview::orderBy('photographerReviewID','DESC')->where('photographerID',$id)->get();
        return view('user.photographer_details')->with(['table' => $table, 'count' => $count,'review' => $review]);
    }

    public function review(Request $request){
        $table = new PhotographerReview();
        $validate = $request->validate([
            'rate' => 'required',
            'comment' => 'required',
        ]);
        $table->rating = $request->rate;
        $table->comment = $request->comment;
        $table->photographerID = $request->photographerID;
        $table->save();
        return redirect()->back();
    }
}
