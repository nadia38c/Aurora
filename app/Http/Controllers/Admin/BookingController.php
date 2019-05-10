<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index(){
        $table = Booking::orderBy('bookingID','DESC')->where('status','Pending')->get();
        return view('admin.booking')->with(['table' => $table]);
    }

    public function view_details($id){
        $table = Booking::find($id);
        return view('admin.form.booking_details')->with(['table' => $table]);
    }

    public function confirm($id){
        $table = Booking::find($id);
        $table->status = 'Confirmed';
        $table->save();
        return redirect()->back();
    }

    public function confirmed(){
        $table = Booking::orderBy('bookingID','DESC')->where('status','Confirmed')->get();
        return view('admin.confirmed_book')->with(['table' => $table]);
    }
}
