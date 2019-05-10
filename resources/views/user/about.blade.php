@extends('layouts.master')
@section('title')
    Who We Are
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area who-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/XPRO0418.jpeg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Who We Are</h2>
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
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-50">
                        <h2>Who We Are</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="{{asset('public/assets/img/about-7.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <p>Aurora was created by a group of young engineering students of Sylhet Metropolitan University, lead by Jobayer Hossain Shuvo who chose their passion as their profession and this incident of their life have been pushing them constantly to expand their potentiality.</p>
                        <p>Right now Aurora has the highest number of fan following among Bangladeshi wedding photography Facebook pages. Among many other achievements we recognize this as the most important one as it directly indicates how many people are relating with us personally. Their likes and comments inspire us to do better every day.</p>
                        <p>In the last 6 years we have covered more than 6800+ events. Our team is now a strong team of 68 Photographers, cinematographers & Editors. All our photographers are highly educated, most of them are engineers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why aurora area start -->
    <section class="why-aurora">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="single-why-aurora">
                        <h4>WHY AURORA</h4>
                        <ul>
                            <li>Educated and highly skilled photographers and cinematographers lead by J.H. Shuvo, who has already won multiple international awards from WPPA, PPAC & WPPI.</li>
                            <li>Pro Level Gears & Equipments.</li>
                            <li>Own Post Processing Panel Facility with strong professionals & expert editors.</li>
                            <li>We believe in treating our customers with respect and faith.</li>
                            <li>We grow through creativity, invention and innovation.</li>
                            <li>We integrate honesty, integrity and business ethics into all aspects of our business functioning.</li>
                            <li>Our photographers have chosen their passion as their profession.</li>
                            <li>Strong Quality Control Management.</li>
                            <li>Aordability for all.</li>
                            <li>Dedicated After Sales Support Team.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="single-why-aurora">
                        <img src="assets/img/about-ceo.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counterup area -->
    <section class="counter-up-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-counter">
                        <i class="fa fa-camera"></i>
                        <h2 class="counter">1040</h2>
                        <p>photos</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter">
                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                        <h2 class="counter">304</h2>
                        <p>cinematographis</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <h2 class="counter">234</h2>
                        <p>awards</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                        <h2 class="counter">187</h2>
                        <p>coffees</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection