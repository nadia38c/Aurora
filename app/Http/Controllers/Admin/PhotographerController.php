<?php

namespace App\Http\Controllers\Admin;

use App\Photographer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotographerController extends Controller
{
    public function index(){
        $table = Photographer::orderBy('name','ASC')->get();
        return view('admin.photographers')->with(['table' => $table]);
    }

    public function create_page(){
        return view('admin.form.photographer_create_page');
    }

    public function save(Request $request){
        $table = new Photographer();
        $validate = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'email' => 'email',
            'phone' => 'max:11',
            'imageName' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $table->name = $request->name;
        $table->designation = $request->designation;
        $table->email = $request->email;
        $table->phone = $request->phone;
        $table->description = $request->description;
        $table->facebook = $request->facebook;
        $table->twitter = $request->twitter;
        $table->instagram = $request->instagram;

        //image upload
        if ($request->hasFile('imageName')) {

            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;

            $table->imageName = $filename;

            $request->imageName->move('public/uploads/photographers',$filename);
        }

        $table->save();
        return redirect()->to('admin/photographer');
    }

    public function edit_page($id){
        $table = Photographer::find($id);
        return view('admin.form.edi_photographer')->with(['table' => $table]);
    }

    public function edit(Request $request){
        $table = Photographer::find($request->id);

        $validate = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'email' => 'email',
            'phone' => 'max:11',
            'imageName' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $table->name = $request->name;
        $table->designation = $request->designation;
        $table->email = $request->email;
        $table->phone = $request->phone;
        $table->description = $request->description;
        $table->facebook = $request->facebook;
        $table->twitter = $request->twitter;
        $table->instagram = $request->instagram;

        //image upload
        if ($request->hasFile('imageName')) {

            // previous image del
            $file = public_path('uploads/photographers/'.$table->imageName);
            if (file_exists($file)){
                unlink($file);
            }
            // previous image del

            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;

            $table->imageName = $filename;

            $request->imageName->move('public/uploads/photographers',$filename);
        }
        $table->save();
        return redirect()->to('admin/photographer');
    }

    public function del($id){
        $table = Photographer::find($id);

        $file = public_path('uploads/photographers/'.$table->imageName);
        if (file_exists($file)){
            unlink($file);
        }
        $table->delete();
        return redirect()->back();
    }
}
