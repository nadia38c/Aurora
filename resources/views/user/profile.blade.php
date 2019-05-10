@extends('layouts.master')
@section('title')
    {{Auth::user()->name}}
@endsection
@section('style')
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 16px;
        }
        h1{
            font-size: 15px;
            margin-top: 7px;
        }
        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
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
                                    <h2>{{Auth::user()->name}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <section class="our-best-instructor-area pt-100 pb-100">
        <div class="container">
            <div class="row pt-50">

                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{asset('public/assets/img/profile/team2.jpg')}}" alt="John" style="width:100%">
                            <h1>{{Auth::user()->name}}</h1>
                            <p>{{Auth::user()->email}}</p>
                            <div style="margin: 24px 0;">
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                <div class="col-md-9">
                    <h4 class="text-secondary mb-3">My Bookings</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pt-0 pb-0">S/N</th>
                            <th class="pt-0 pb-0">Category</th>
                            <th class="pt-0 pb-0">Package Type</th>
                            <th class="pt-0 pb-0">Package Name</th>
                            <th class="pt-0 pb-0">Event Date</th>
                            <th class="pt-0 pb-0">Amount</th>
                            <th class="pt-0 pb-0">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                        <tr>
                            <td class="pt-2 pb-2">#{{invoice_n($row->bookingID)}}</td>
                            <td class="pt-2 pb-2">{{$row->category}}</td>
                            <td class="pt-2 pb-2">
                                @if($row->category == 'Cinematography')
                                    N/A
                                @else
                                    {{$row->packageType}}
                                @endif
                            </td>
                            <td class="pt-2 pb-2">{{$row->packageName}}</td>
                            <td class="pt-2 pb-2">{{pub_date($row->eventDate)}}</td>
                            <td class="pt-2 pb-2">{{money($row->amount)}}</td>
                            <td class="pt-2 pb-2">
                                @if($row->status == 'Pending')
                                    <p class="btn btn-sm btn-danger">{{$row->status}}</p>
                                    @else
                                    <p class="btn btn-sm btn-success">{{$row->status}}</p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection