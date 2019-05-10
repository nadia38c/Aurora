<?php

namespace App\Http\Controllers\User;

use App\CenematographyPackage;
use App\PhotographyPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function photo_package(){
        $economy = PhotographyPackage::orderBy('photoPackageID','DESC')->where('type','Economy')->get();
        $exclusive = PhotographyPackage::orderBy('photoPackageID','DESC')->where('type','Exclusive')->get();
        $premium = PhotographyPackage::orderBy('photoPackageID','DESC')->where('type','Premium')->get();
        return view('user.photo_package')->with(['economy' => $economy, 'exclusive' => $exclusive, 'premium' => $premium]);
    }
    public function cine_package(){
        $table = CenematographyPackage::orderBy('cinepackageID','DESC')->get();
        return view('user.cinematography_package')->with(['table' => $table]);
    }
}
