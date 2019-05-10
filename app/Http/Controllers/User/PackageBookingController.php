<?php

namespace App\Http\Controllers\User;

use App\Booking;
use App\CenematographyPackage;
use App\Photographer;
use App\PhotographyPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageBookingController extends Controller
{
    public function photo_package_booking_page($id){
        $table = PhotographyPackage::find($id);
        $photographeer = Photographer::orderBy('name','ASC')->get();
        return view('user.form.photo_book')->with(['table' => $table,'photographeer' => $photographeer]);
    }

    public function photo_book(Request $request){
        //dd($request->all());
        $table = new Booking();

        $validate = $request->validate([
            'phone' => 'required | max:11',
            'address' => 'required',
            'event_date' => 'required',
            'customerEmail' => 'required',
        ]);

        $table->photoPackageID = $request->photoPackageID;
        $table->packageName = $request->packageName;
        $table->packageType = $request->packageType;
        $table->customerName = $request->customerName;
        $table->customerEmail = $request->customerEmail;
        $table->address = $request->address;
        $table->phone = $request->phone;
        $table->category = 'Photography';
        $table->eventDate = db_date($request->event_date).' '.date('H:i:s');
        $table->photographer = $request->photographer;
        $table->amount = $request->amount;
        $table->message = $request->message;
        $table->save();

        return redirect()->to('booking/success');
    }

    public function cine_package_booking_page($id){
        $table = CenematographyPackage::find($id);
        $photographeer = Photographer::orderBy('name','ASC')->get();
        return view('user.form.cine_book')->with(['table' => $table,'photographeer' => $photographeer]);
    }

    public function cine_book(Request $request){
        //dd($request->all());
        $table = new Booking();

        $validate = $request->validate([
            'phone' => 'required | max:11',
            'address' => 'required',
            'event_date' => 'required',
            'customerEmail' => 'required',
        ]);

        $table->cinepackageID = $request->cinepackageID;
        $table->packageName = $request->packageName;
        $table->customerName = $request->customerName;
        $table->customerEmail = $request->customerEmail;
        $table->address = $request->address;
        $table->phone = $request->phone;
        $table->category = 'Cinematography';
        $table->eventDate = db_date($request->event_date).' '.date('H:i:s');
        $table->photographer = $request->photographer;
        $table->amount = $request->amount;
        $table->message = $request->message;
        $table->save();

        return redirect()->to('booking/success');
    }
}
