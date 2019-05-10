<?php

namespace App\Http\Controllers\Admin;

use App\CenematographyPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CinePackageController extends Controller
{
    public function index(){
        $table = CenematographyPackage::orderBy('cinepackageID','DESC')->get();
        return view('admin.cinepackage')->with(['table' => $table]);
    }

    public function create_page(){
        return view('admin.form.cine_create');
    }

    public function save(Request $request){
        $table = new CenematographyPackage();
        $validate = $request->validate([
            'packageName' => 'required',
            'raw_footage' => 'required',
            'edited_video' => 'required',
            'videographers' => 'required | integer',
            'vdo_quality' => 'required',
            'hours' => 'required',
            'amount' => 'required | min:0',
        ]);

        $table->packageName = $request->packageName;
        $table->raw_footage = $request->raw_footage;
        $table->edited_video = $request->edited_video;
        $table->videographers = $request->videographers;
        $table->vdo_quality = $request->vdo_quality;
        $table->hours = $request->hours;
        $table->amount = $request->amount;
        $table->save();
        return redirect()->to('admin/package/cinematography');
    }

    public function edit_page($id){
        $table = CenematographyPackage::find($id);
        return view('admin.form.edi_cine')->with(['table' => $table]);
    }

    public function edit(Request $request){
        $table = CenematographyPackage::find($request->id);

        $validate = $request->validate([
            'packageName' => 'required',
            'raw_footage' => 'required',
            'edited_video' => 'required',
            'videographers' => 'required | integer',
            'vdo_quality' => 'required',
            'hours' => 'required',
            'amount' => 'required | min:0',
        ]);

        $table->packageName = $request->packageName;
        $table->raw_footage = $request->raw_footage;
        $table->edited_video = $request->edited_video;
        $table->videographers = $request->videographers;
        $table->vdo_quality = $request->vdo_quality;
        $table->hours = $request->hours;
        $table->amount = $request->amount;
        $table->save();
        return redirect()->to('admin/package/cinematography');
    }

    public function del($id){
        $table = CenematographyPackage::find($id);
        $table->delete();
        return redirect()->back();
    }
}
