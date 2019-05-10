@extends('layouts.master')
@section('title')
    Blog
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area gallery-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/XH01166211.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Blog</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- blog area start -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="single-blog">
                        <h5>What would be the state of us society if cameras were never invented?</h5>
                        <img src="{{asset('public/assets/img/blog1.jpg')}}" alt="img" />
                        <p>Several positive ways photography has changed the world :</p>
                        <p>1). The world would be less socially aware.  The New York Photo League and others have taken topics like poverty into the mainstream as very real problems at times against the rhetoric of the political environment.  The horrors of famine and disease would be relegated to a few lines in a newspaper article that would not begin to convey what a single photograph conveys.</p>
                        <p>2). There would be few if any National Parks.  William Jackson, George Masa, Ansel Adams and others produced images that motivated the nation to creat, fund, and continue to fund the National Parks in the United States.</p>
                        <h6>2018-02-03/BY XBRIDAL</h6>
                        <h5>Share this entry</h5>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="reddit"><a href="#"><i class="fa fa-reddit"></i></a></li>
                        </ul>
                    </div>
                    <div class="single-blog">
                        <h5>Several positive ways photography has changed the world	</h5>
                        <img src="{{asset('public/assets/img/who we are.jpg')}}" alt="img" />
                        <p>Several positive ways photography has changed the world:</p>
                        <p>1). The world would be less socially aware.  The New York Photo League and others have taken topics like poverty into the mainstream as very real problems at times against the rhetoric of the political environment.  The horrors of famine and disease would be relegated to a few lines in a newspaper article that would not begin to convey what a single photograph conveys.</p>
                        <p>2). There would be few if any National Parks.  William Jackson, George Masa, Ansel Adams and others produced images that motivated the nation to creat, fund, and continue to fund the National Parks in the United States.</p>
                        <h6>2018-02-03/BY XBRIDAL</h6>
                        <h5>Share this entry</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                        </ul>
                    </div>
                    <div class="single-blog">
                        <h5>What would  the world have experienced if cameras were never invented?</h5>
                        <img src="{{asset('public/assets/img/slider/Couple-2.jpg')}}" alt="img" />
                        <p>Several positive ways photography has changed the world:</p>
                        <p>1). The world would be less socially aware.  The New York Photo League and others have taken topics like poverty into the mainstream as very real problems at times against the rhetoric of the political environment.  The horrors of famine and disease would be relegated to a few lines in a newspaper article that would not begin to convey what a single photograph conveys.</p>
                        <p>2). There would be few if any National Parks.  William Jackson, George Masa, Ansel Adams and others produced images that motivated the nation to creat, fund, and continue to fund the National Parks in the United States.</p>
                        <h6>2018-02-03/BY XBRIDAL</h6>
                        <h5>Share this entry</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="blog-form">
                        <form action="">
                            <input type="text" placeholder="Search" />
                            <span><i class="fa fa-search"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
