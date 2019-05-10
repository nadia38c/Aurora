<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $table = User::orderBy('id','ASC')->get();
        return view('admin.user')->with(['table' => $table]);
    }

    public function edit_page($id){
        $table = User::find($id);
        return view('admin.form.user_edit')->with(['table' => $table]);
    }

    public function edit(Request $request){
        $table = User::find($request->id);
        $table->userType = $request->userType;
        $table->save();
        return redirect()->to('admin/users');
    }

    public function del($id){
        $table = User::find($id);
        $table->delete();
        return redirect()->back();

    }
}
