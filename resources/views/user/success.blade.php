@extends('layouts.master')
@section('title')
    Success
@endsection
@section('content')
    <!-- Experience area start -->
    <section class="experience-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div style="padding: 87px 58px;margin: 100px 0;" class="card">
                        <div class="card-body text-center">
                            <h1 class="card-text">You Booked a Package Successfully &nbsp;<i class="fa fa-smile-o"></i></h1>
                            <h3 class="card-text text-success">Thank You!!</h3>
                            <p>Go back to <a style="color: #1b4b72" href="{{action('User\IndexController@index')}}">Home Page</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection