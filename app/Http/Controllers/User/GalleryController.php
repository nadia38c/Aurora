<?php

namespace App\Http\Controllers\User;

use App\Album;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index(){
        $table = Album::orderBy('albumID','DESC')->get();
        return view('user.gallery')->with(['table' => $table]);
    }

// all photos
    public function all_photos(){
        $table = Gallery::orderBy('galleryID', 'ASC')->get();
        $data=[];
        foreach ($table as $row){
            $rowData['galleryID'] = $row->galleryID;
            $rowData['images'] = $row->images;
            $rowData['albumID'] = $row->albumID;
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }

        return response()->json($data);
    }
// category wise
    public function cat_wise_photos($id){
        $table = Gallery::orderBy('galleryID', 'DESC')->where('albumID',$id)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['galleryID'] = $row->galleryID;
            $rowData['images'] = $row->images;
            $rowData['albumID'] = $row->albumID;
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }

        return response()->json($data);
    }
}
