@extends('layouts.master')
@section('title')
    Cinematography
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
                                    <h2>VIDEO/CINE PACKAGES</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- photography-package page AREA START -->
    <section class="photography-package-area pt-50 pb-100">
        <div class="container">
            <div class="row pt-50">
                @foreach($table as $row)
                <div class="col-md-4">
                    <div class="my-single-collapse">
                        <ul class="border-black">
                            <li class="black">{{$row->packageName}}</li>
                        </ul>
                        <ul class="ul-border">
                            <li>Raw Footage: &nbsp;{{$row->raw_footage}}</li>
                            <li>Edited Video: &nbsp;{{$row->edited_video}}</li>
                            <li>Videographers: &nbsp;{{$row->videographers}}</li>
                            <li>Recording Quality: &nbsp;{{$row->vdo_quality}}</li>
                            <li>Number of Hours: &nbsp;{{$row->hours}}</li>
                        </ul>
                        <ul class="border-black">
                            <li class="black">{{money($row->amount)}}</li>
                        </ul>
                        <a href="{{action('User\PackageBookingController@cine_package_booking_page',['id' => $row->cinepackageID, 'slug' => $row->slug])}}">Book Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection