<?php

namespace App\Http\Controllers\User;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OtherPageController extends Controller
{
    public function profile(){
        $table = Booking::orderBy('bookingID','DESC')->where('userID',Auth::user()->id)->get();
        return view('user.profile')->with(['table' => $table]);
    }
    // about page
    public function about(){
        return view('user.about');
    }
    // client
    public function client_review(){
        return view('user.client_review');
    }

    // faq
    public function faq(){
        return view('user.faq');
    }

    // blog
    public function blog(){
        return view('user.blog');
    }

    // contact
    public function contact(){
        return view('user.contact');
    }

    // Success
    public function success(){
        return view('user.success');
    }
}
