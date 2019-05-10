@extends('layouts.master')
@section('title')
    FAQ
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area gallery-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/slider/slide-1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Faq</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- FAQ AREA START -->
    <section class="faq-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion my-accordion">

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">Faq 1<span class="collapsed"><p><b>></b></p></span>
                                    <span class="expanded"><p><b><</b></p></span></a>
                            </div>
                            <div id="menuone" class="collapse show">
                                <div class="card-body">
                                    <p> WD Projector hover icon <br/>Projector<br/>
                                        We have a number of truly unique ways to tell the personal story of the couple on their wedding day. We offer custom built slideshows, a number of screens, and high power HD short-throw projectors to let all of your guests see your slideshow, movies or photos in vibrant rich color in daylight or at night time.</p>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">Faq 2<span class="collapsed"><p><b>></b></p></span>
                                    <span class="expanded"><p><b><</b></p></span></a>
                            </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body">
                                    <p> WD Projector hover icon <br/>Projector<br/>
                                        We have a number of truly unique ways to tell the personal story of the couple on their wedding day. We offer custom built slideshows, a number of screens, and high power HD short-throw projectors to let all of your guests see your slideshow, movies or photos in vibrant rich color in daylight or at night time.</p>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">Faq 3<span class="collapsed"><p><b>></b></p></span>
                                    <span class="expanded"><p><b><</b></p></span></a>
                            </div>
                            <div id="menu3" class="collapse">
                                <div class="card-body">
                                    <p> WD Projector hover icon <br/>Projector<br/>
                                        We have a number of truly unique ways to tell the personal story of the couple on their wedding day. We offer custom built slideshows, a number of screens, and high power HD short-throw projectors to let all of your guests see your slideshow, movies or photos in vibrant rich color in daylight or at night time.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="progress-barr pt-100">
                        <div class="container">
                            <h2>Our Skill</h2>
                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <div class="progressbar">
                                        <div class="second circle" data-percent="77">
                                            <strong></strong>
                                            <span>Cinematography</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="progressbar">
                                        <div class="second circle" data-percent="55">
                                            <strong></strong>
                                            <span>Drone</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="progressbar">
                                        <div class="second circle" data-percent="100">
                                            <strong></strong>
                                            <span>Photography</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection