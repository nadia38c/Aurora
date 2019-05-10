<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{

    public function index(){
        $table = Gallery::orderBy('galleryID','DESC')->get();
        return view('admin.photos')->with(['table' => $table]);
    }

    public function create_photo_page(){
        $table = Album::orderBy('albumID','DESC')->get();
        return view('admin.form.photos')->with(['table' => $table]);
    }

    public function save(Request $request){

        $validate = $request->validate([
            'albumID' => 'required',
        ]);

        if ($request->hasFile('images')){

            $images_array = $request->file('images');
            $array_len = count($images_array);

            for ($i=0; $i<$array_len; $i++){
                $extension = $images_array[$i]->extension();
                $filename = rand(123456,999999).'.'.$extension;
                $path = public_path('uploads/gallery');
                $images_array[$i]->move($path,$filename);

                $table = new Gallery();
                $table->albumID = $request->albumID;
                $table->images  = $filename;
                $table->save();

            }

            return redirect()->to('admin/gallery/photos');

        }

    }

    public function del($id){
        $table = Gallery::find($id);
        $file = public_path('uploads/gallery/'.$table->images);
        if (file_exists($file)){
            unlink($file);
        }

        $table->delete();
        return redirect()->back();
    }
}
