@extends('layouts.master')
@section('title')
    Photographers
@endsection
@section('style')
    <style>
        /* ---------for star rating start----------- */
        .checked {
            color: orange;
        }
        /* ---------for star rating end----------- */
    </style>
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area gallery-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/galleryy.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Meet Our Team</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- photographer area start -->
    <section class="our-best-instructor-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50">
                @foreach($table as $row)
                <div class="col-md-3">
                    <div class="single-our-best-instructor">
                        <div class="best-instructor-img">
                            <img src="{{asset('public/uploads/photographers/'.$row->imageName)}}" alt="img"/>
                            <div class="inner-best-instructor">
                                <ul>
                                    <li><a href="https://www.facebook.com/{{$row->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/{{$row->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/{{$row->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <a class="view-more" href="{{action('User\PhotographerController@photographer_details',['id' => $row->photographerID, 'slug' => $row->slug])}}">View Portfolio</a>
                            </div>
                        </div>
                        <h3>{{$row->name}}</h3>
                        <p>{{$row->designation}}</p>
                        @php
                            $totalRating = $row->ratingTotal($row->photographerID);
                            $totalUser = $row->totalUser($row->photographerID);
                            if ($totalRating > '0' ){
                                $grandRating = $totalRating/$totalUser;
                            }
                            else{
                             $grandRating = 0;
                            }
                        @endphp
                        <form action="#">
                            <fieldset class="rate">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                ( {{number_format($grandRating,2)}} )
                            </fieldset>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- FOOTER AREA -->
@endsection