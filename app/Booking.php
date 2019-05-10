<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'bookingID';
    protected $fillable = ['customerName','customerEmail','category','phone','address','packageName', 'packageType', 'eventDate','photographer', 'status','amount','photoPackageID','cinepackageID','userID'];

}
