<?php

namespace App\Http\Controllers\Admin;

use App\PhotographyPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoPackageController extends Controller
{
    public function index(){
        $table = PhotographyPackage::orderBy('photoPackageID','DESC')->get();
        return view('admin.photo_package')->with(['table' => $table]);
    }

    public function create_page(){
        return view('admin.form.photo_package_create');
    }

    public function save(Request $request){
        $table = new PhotographyPackage();
        $validate = $request->validate([
            'packageName' => 'required',
            'type' => 'required',
            'hours' => 'required',
            'amount' => 'required | min:0',
        ]);

        $table->packageName = $request->packageName;
        $table->type = $request->type;
        $table->total_print = $request->total_print;
        $table->photographers = $request->photographers;
        $table->imported_album = $request->imported_album;
        $table->poster_photo = $request->poster_photo;
        $table->bridal_story = $request->bridal_story;
        $table->photo_movie = $request->photo_movie;
        $table->desk_calender = $request->desk_calender;
        $table->hours = $request->hours;
        $table->amount = $request->amount;
        $table->save();
        return redirect()->to('admin/package/photography');
    }

    public function edit_page($id){
        $table = PhotographyPackage::find($id);
        return view('admin.form.edi_photopackage')->with(['table' => $table]);
    }

    public function edit(Request $request){
        $table = PhotographyPackage::find($request->id);

        $validate = $request->validate([
            'packageName' => 'required',
            'type' => 'required',
            'hours' => 'required',
            'amount' => 'required | min:0',
        ]);

        $table->packageName = $request->packageName;
        $table->type = $request->type;
        $table->total_print = $request->total_print;
        $table->photographers = $request->photographers;
        $table->imported_album = $request->imported_album;
        $table->poster_photo = $request->poster_photo;
        $table->bridal_story = $request->bridal_story;
        $table->photo_movie = $request->photo_movie;
        $table->desk_calender = $request->desk_calender;
        $table->hours = $request->hours;
        $table->amount = $request->amount;
        $table->save();
        return redirect()->to('admin/package/photography');
    }

    public function del($id){
        $table = PhotographyPackage::find($id);
        $table->delete();
        return redirect()->back();
    }
}
