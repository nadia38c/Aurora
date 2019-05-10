@extends('layouts.master')
@section('title')
    Client Review
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area client-slider-area">
        <div class="sliderr">
            <div class="single-slide client-slider-single-slide" style="background-image:url({{asset('public/assets/img/clientt.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Client Reviews</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- Experience area start -->
    <section class="experience-area pt-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-exp">
                        <img src="{{asset('public/assets/img/HP_Icon_Camera.png')}}" alt="img" />
                        <h2>Photography</h2>
                        <p>The photographer of auroras career has cultivated their unique ability of capturing moments and emotions in beautiful ways, a skill that perfectly translates into their work.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-exp">
                        <img src="{{asset('public/assets/img/HP_Icon_Video.png')}}" alt="img" />
                        <h2>Videography</h2>
                        <p>Dedicated to visual storytelling, photographers approach to videography allows their to deliver exceptional visual content throughout every project. .</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-exp">
                        <img src="{{asset('public/assets/img/HP_Icon_Drone.png')}}" alt="img" />
                        <h2>Drone Certified</h2>
                        <p>Staying on top of the latest tech, photographers holds a full Drone Operator’s licence allowing them to capture footage that would otherwise be impossible to achieve. .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience area end -->
    <!-- Testimonials Area Start -->
    <section class="testimonial-area pb-100 pt-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials owl-carousel">
                        <div class="single-testimonial">
                            <div class="testi-img">
                                <img src="{{asset('public/assets/img/team/01.jpg')}}" alt="" />
                            </div>
                            <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                            <h4>john doe <span>web developer</span></h4>
                        </div>
                        <div class="single-testimonial">
                            <div class="testi-img">
                                <img src="{{asset('public/assets/img/team/01.jpg')}}" alt="" />
                            </div>
                            <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                            <h4>john doe <span>web developer</span></h4>
                        </div>
                        <div class="single-testimonial">
                            <div class="testi-img">
                                <img src="{{asset('public/assets/img/team/02 (1).jpg')}}" alt="" />
                            </div>
                            <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                            <h4>john doe <span>web developer</span></h4>
                        </div>
                        <div class="single-testimonial">
                            <div class="testi-img">
                                <img src="{{asset('public/assets/img/team/01.jpg')}}" alt="" />
                            </div>
                            <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda culpa cumque dicta sint soluta voluptas eius iusto modi reprehenderit sint soluta voluptas. "</p>
                            <h4>john doe <span>web developer</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonilas Area End -->
@endsection