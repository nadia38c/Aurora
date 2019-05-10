<section class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="header-left">
                    <a href=""><i class="fa fa-envelope"></i> info@demo.com</a>
                    <a href=""><i class="fa fa-phone"></i> 1234567890</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <div class="header-social">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header Area Start -->
<header class="header header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <a class="navbar-brand" href="{{action('User\IndexController@index')}}">Aurora</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                        <ul class="navbar-nav ml-auto another">
                            <li class="current"><a href="{{action('User\IndexController@index')}}">Home</a></li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                                <div class="dropdown-menu my-dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\OtherPageController@about')}}"><i class="fa fa-angle-double-right"></i>Who We Are</a>
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\OtherPageController@client_review')}}"><i class="fa fa-angle-double-right"></i>Client Reviews</a>
                                </div>
                            </li>
                            <li><a href="{{action('User\PhotographerController@index')}}">Photographers</a></li>
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    packages
                                </a>
                                <div class="dropdown-menu my-dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\PackageController@photo_package')}}"><i class="fa fa-angle-double-right"></i>Photography Packages</a>
                                    <a class="dropdown-item my-dropdown-item transition" href="{{action('User\PackageController@cine_package')}}"><i class="fa fa-angle-double-right"></i>Cinematography Packages</a>
                                </div>
                            </li>
                            <li><a href="{{action('User\GalleryController@index')}}">Gallery</a></li>
                            <li><a href="{{action('User\OtherPageController@faq')}}">Faq</a></li>
                            <li><a href="{{action('User\OtherPageController@blog')}}">Blog</a></li>
                            <li><a href="{{action('User\OtherPageController@contact')}}">Contact</a></li>
                            @if(isset(Auth::user()->email))
                                <li><a href="{{action('User\OtherPageController@profile')}}">{{Auth::user()->name}}</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <li><a href="{{route('login')}}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>