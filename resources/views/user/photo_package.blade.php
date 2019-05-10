@extends('layouts.master')
@section('title')
    Photography Packages
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
                                    <h2>photography packageS</h2>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-50">
                        <h2>ECONOMY</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($economy as $row)
                <div class="col-md-4">
                    <div class="my-single-collapse">
                        <ul class="border-black">
                            <li class="black">{{$row->packageName}}</li>
                        </ul>
                        <ul class="ul-border">
                            <li>Number of Prints: <span>{{$row->total_print}}</span></li>
                            <li>4R- 80</li>
                            <li><span>Photoshoot: {{$row->photo_shoot}}</span></li>
                            <li>Photographer: {{$row->photographers}}</li>
                            <li>Hours: {{$row->hours}}</li>
                            <li>Imported Album: &nbsp;{{$row->imported_album}}</li>
                        </ul>
                        <ul class="border-black">
                            <li class="black">{{money($row->amount)}}</li>
                        </ul>
                        <a href="{{action('User\PackageBookingController@photo_package_booking_page',['id' => $row->photoPackageID, 'slug' => $row->slug])}}">Book Now</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pt-50 pb-50">
                        <h2>EXCLUSIVE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($exclusive as $row)
                <div class="col-md-6">
                    <div class="my-single-collapse">
                        <ul class="border-black">
                            <li class="black">{{$row->packageName}}</li>
                        </ul>
                        <ul class="ul-border">
                            <li>Number of Prints: <span>{{$row->total_print}}</span></li>
                            <li><span>Photoshoot: &nbsp;{{$row->photo_shoot}}</span></li>
                            <li>Photographer: &nbsp;{{$row->photographers}}</li>
                            <li>Hours: &nbsp;{{$row->hours}}</li>
                            <li>Imported Album: &nbsp;{{$row->imported_album}}</li>
                            <li>Poster Photo: &nbsp;{{$row->poster_photo}}</li>
                        </ul>
                        <ul class="border-black">
                            <li class="black">{{money($row->amount)}}</li>
                        </ul>
                        <a href="{{action('User\PackageBookingController@photo_package_booking_page',['id' => $row->photoPackageID, 'slug' => $row->slug])}}">Book Now</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pt-50 pb-50">
                        <h2>PREMIUM</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($premium as $row)
                <div class="col-md-6">
                    <div class="my-single-collapse">
                        <ul class="border-black">
                            <li class="black">{{$row->packageName}}</li>
                        </ul>
                        <ul class="ul-border">
                            <li>Number of Prints: <span>{{$row->total_print}}</span></li>
                            <li><span>Photoshoot: &nbsp;{{$row->photo_shoot}}</span></li>
                            <li>Photographer: &nbsp;{{$row->photographers}}</li>
                            <li>Imported Album:&nbsp;{{$row->imported_album}}</li>
                            <li>Poster Photo: &nbsp;{{$row->poster_photo}}</li>
                            <li>Hours: &nbsp;{{$row->hours}}</li>
                            <li>Bridal Story Book: &nbsp;{{$row->bridal_story}}</li>
                            <li>Photo Movie: &nbsp;{{$row->photo_movie}}</li>
                            <li>Desk Calendar: &nbsp;{{$row->desk_calender}}</li>
                        </ul>
                        <ul class="border-black">
                            <li class="black">{{money($row->amount)}}</li>
                        </ul>
                        <a href="{{action('User\PackageBookingController@photo_package_booking_page',['id' => $row->photoPackageID, 'slug' => $row->slug])}}">Book Now</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection