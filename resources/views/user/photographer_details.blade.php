@extends('layouts.master')
@section('title')
    {{$table->name}}
@endsection
@section('style')
    <style>
        /* ---------for star rating start----------- */
        .rate {
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
        }

        input {
            display: none;
        }

        label {
            float: right;
            font-size: 0;
            color: #d9d9d9;
            height:32px;
            margin-bottom:0;
        }

        label:before {
            content: "\f005";
            font-family: FontAwesome;
            font-size: 25px;
        }
        label:hover,
        label:hover ~ label {
            color: #fcd000;
            transition: 0.2s;
        }

        input:checked ~ label {
            color: #ccac00;
        }

        input:checked ~ label:hover,
        input:checked ~ label:hover ~ label {
            color: #fcd000;
            transition: 0.2s;
        }
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
                                    <h2>Portfolio</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- portfolio area start -->
    <section class="portfolio-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="port-img">
                        <img src="{{asset('public/uploads/photographers/'.$table->imageName)}}" alt="" />
                    </div>
                    <div class="port-info">
                        <h4><span>Name :</span>{{$table->name}}</h4>
                        <h4><span>Designation :</span>{{$table->designation}}</h4>
                        <h4><span>Email :</span>{{$table->email}}</h4>
                        <h4><span>Phone :</span>{{$table->phone}}</h4>
                        <h4><span>social-links :</span><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i></h4>
                        @php
                            $totalRating = $table->ratingTotal($table->photographerID);
                            $totalUser = $table->totalUser($table->photographerID);
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
                <div class="col-sm-7">
                    <div class="port-description">
                        <h5>{{$table->name}} : {{$table->designation}}</h5>
                        <p>{{$table->description}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="port-rating-area">
                            {{--@if($check == null)--}}
                            <h4 class="text-muted mt-5 mb-2 text-center">Please Give a review about our photographer....</h4>
                            @if ($errors->any())
                                <div style="margin: 20px;" class="alert alert-danger">
                                    <ul style="list-style: circle">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <form action="{{action('User\PhotographerController@review')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="photographerID" value="{{$table->photographerID}}">
                            <fieldset class="rate">
                                <input id="rate1-star5" type="radio" name="rate" value="5" />
                                <label for="rate1-star5" title="Excellent">5</label>

                                <input id="rate1-star4" type="radio" name="rate" value="4" />
                                <label for="rate1-star4" title="Good">4</label>

                                <input id="rate1-star3" type="radio" name="rate" value="3" />
                                <label for="rate1-star3" title="Satisfactory">3</label>

                                <input id="rate1-star2" type="radio" name="rate" value="2" />
                                <label for="rate1-star2" title="Bad">2</label>

                                <input id="rate1-star1" type="radio" name="rate" value="1" />
                                <label for="rate1-star1" title="Very bad">1</label>

                                <input type="text" placeholder="comment" />
                            </fieldset>
                            <input class="comment" name="comment" type="text" placeholder="leave your comment"/>

                            <button class="btn btn-primary btn-sm mt-2" type="submit">Submit Your Review</button>
                        </form>
                                {{--@else--}}
                                {{--<h4 class="text-muted mt-2 mb-2 text-center">You already reviewed <i class="fa fa-smile-o"></i></h4>--}}
                              {{--@endif--}}
                        <div class="comnt">
                            <p>{{$count}} comments<span>Sort by Newest</span></p>
                        </div>
                        @foreach($review as $row)
                        <hr>
                        <div class="row mb-4">
                            <div class="col-sm-2">
                                <div class="user-img">
                                    <img src="{{asset('public/assets/img/team/02 (1).jpg')}}" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="new-cmmnt">
                                    <h6>{{$row->user['name']}}</h6>
                                    <h5>{{$row->comment}}</h5>
                                    <h6>Reply &nbsp Edit &nbsp  Remove</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area end -->
@endsection