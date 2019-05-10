<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $table = Album::orderBy('title','ASC')->get();
        return view('admin.category')->with(['table' => $table]);
    }

    public function create_page(){
        return view('admin.form.category');
    }

    public function save(Request $request){
        $table = new Album();
        $validate = $request->validate([
            'title' => 'required | unique:albums,title',
        ]);

        $table->title = $request->title;
        $table->save();
        return redirect()->to('admin/gallery/category');
    }

    public function edit_page($id){
        $table = Album::find($id);
        return view('admin.form.edi_category')->with(['table' => $table]);
    }

    public function edit(Request $request){
        $table = Album::find($request->albumID);
        $validate = $request->validate([
            'title' => 'required | unique:albums,title',
        ]);

        $table->title = $request->title;
        $table->save();
        return redirect()->to('admin/gallery/category');
    }

    public function del($id){
        $table = Album::find($id);
        $table->delete();
        return redirect()->back();
    }
}
