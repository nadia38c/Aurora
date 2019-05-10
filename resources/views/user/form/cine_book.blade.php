@extends('layouts.master')
@section('title')
    Cinematography Package Booking
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area gallery-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/slider/Couple-2.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Cinematography Package Booking</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- Contact AREA START -->
    <!-- Contact AREA START -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="single-con-info pt-50 pb-50">
                        <h6>{{$table->packageName}}</h6>
                        <p class="con-text">Number of Prints: {{$table->videographers}}</p>
                        <p>Recording Quality: {{$table->vdo_quality}}</p>
                        <p>Videographer: {{$table->photographers}}</p>
                        <p>Hours: {{$table->hours}}</p>
                        <p>{{money($table->amount)}}</p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-form-area">
                        <h4>Fill out the form & Book your best choice!</h4>
                        @if ($errors->any())
                            <div style="margin: 20px;" class="alert alert-danger">
                                <ul style="list-style: circle">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{action('User\PackageBookingController@cine_book')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="cinepackageID" value="{{$table->cinepackageID}}">
                            <input type="hidden" name="packageName" value="{{$table->packageName}}">
                            <div class="single-input">
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Name</label>
                                <input name="customerName" value="{{Auth::user()->name}}" type="text" placeholder="Your Name"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Email</label>
                                <input name="customerEmail" value="{{Auth::user()->email}}" type="email" placeholder="Your Email"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Address</label>
                                <input name="address" type="text" placeholder="Your Address"/>
                            </div>
                            <div class="single-input s-2">
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Mobile</label>
                                <input name="phone" id="phone" type="text" placeholder="Your Mobile Number"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Total Amount</label>
                                <input name="amount" type="number" value="{{$table->amount}}" min="0" placeholder="Amount"/>
                                <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="phone">Event Date</label>
                                <input name="event_date" type="date" placeholder="Your Event Date"/>
                            </div>
                            <label style="color: #898282;margin-left: 10px;font-size: 13px;" for="message">Any other requirements? Then write here ( optional )</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <div class="form-group" style="margin-top: 10px">
                                <label for="exampleFormControlSelect2" style="color: #898282;font-size: 14px;">Choose Videographer ( optional )</label>
                                <select name="photographer" class="form-control" id="exampleFormControlSelect2">
                                    <option value="">Choose Videographer</option>
                                    @foreach($photographeer as $row)
                                        <option value="{{$row->name}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="con-form-adiv">
                                <button class="btn btn-sm btn-success" type="submit">Book</button>
                                <a style=" padding-top: 5px; padding-bottom: 7px; padding-right:7px; padding-left:7px;background-color: #b90000;" href="{{ URL::previous() }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
