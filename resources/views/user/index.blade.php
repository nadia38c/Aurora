@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area" id="home">
        <div class="slider owl-carousel">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/0026_UM_perziurai-0303.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h4>We Are Aurora</h4>
                                    <h2>A picture is worth a thousand words</h2>
                                    <p> It clearly and beautifully captures your emotions- the joy, the laughter, the tears, you name it. Our pride is in offering the best shoots as we help you tell your story in photos.</p>
                                    <a href="#" class="box-btn">view gallery<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/D&M_spausdinimui033.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h4>We Are Aurora</h4>
                                    <h2>Every moment of your life is beautiful.</h2>
                                    <p>Your each movement,your each emotion is nothing but a beautiful picture and we just want to hold on those moments with our camera and make it a piece of art with our adroit editing..</p>
                                    <a href="#" class="box-btn">view gallery <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/header2.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h4>We Are Aurora</h4>
                                    <h2>Ready to take you beyond your imagination!</h2>
                                    <p>With the uniqueness of our concepts and hard working quality, we are always a step ahead from others.</p>
                                    <a href="#" class="box-btn">view gallery <i class="fa fa-angle-double-right"></i></a>
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
                        <h2>About Us</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="{{asset('public/assets/img/0002_UM_perziurai-0315.jpg')}}" alt="" />
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
    <!-- gallery area start -->
    <section class="gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center pb-50">
                        <h2>Best Work</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                    </div>
                </div>
            </div>
            <div class="row masonry-menu pt-50 pb-50">
                <div class="col-xl-12">
                    <div class="gallry-menu mb-30">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".cat1">Weddings</button>
                        <button data-filter=".cat2">People</button>
                        <button data-filter=".cat3">Property</button>
                        <button data-filter=".cat4">Bithday</button>
                        <button data-filter=".cat5">Nature</button>
                        <button data-filter=".cat6">Baby</button>
                        <button data-filter=".cat7">Special</button>
                    </div>
                </div>
            </div>
            <div class="row gallery-active">
                <div class="col-md-4 grid-item cat2 cat4 cat7">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/1.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat5 cat6 cat4">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/2.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat1 cat5 cat2">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/3.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat2 cat4 cat6 cat5">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/4.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat1 cat5">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/5.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 ">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/6.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat4">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/12.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat4 cat1 cat7 cat5">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/15.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-item cat3 cat4 cat6">
                    <div class="single-gallery mb-30">
                        <img src="{{asset('public/assets/img/masonry/8.jpg')}}" alt="img" />
                        <div class="overlay">
                            <div class="overlay-content">
                                <div class="gallery-header-social-1">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="gallery-header-social-2">
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
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