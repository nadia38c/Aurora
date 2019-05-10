<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" ><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>

                    </li>
                    <li class="nav-divider">
                        Features
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/booking/*','admin/booking') ? 'active' : '') }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="fa fa-download"></i>Booking</a>
                        <div id="submenu-3" class="collapse submenu {{ (Request::is('admin/booking/*','admin/booking') ? 'show' : '') }}" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ (Request::is('admin/booking') ? 'active' : '') }}" href="{{action('Admin\BookingController@index')}}">New Booking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (Request::is('admin/booking/confirmed') ? 'active' : '') }}" href="{{action('Admin\BookingController@confirmed')}}">Booked List</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/package/*','admin/package') ? 'active' : '') }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-2"><i class="far fa-chart-bar"></i>Packages</a>
                        <div id="submenu-3" class="collapse submenu {{ (Request::is('admin/package/*','admin/package') ? 'show' : '') }}" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ (Request::is('admin/package/photography') ? 'active' : '') }}" href="{{action('Admin\PhotoPackageController@index')}}">Photography</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ (Request::is('admin/package/cinematography') ? 'active' : '') }}" href="{{action('Admin\CinePackageController@index')}}">Cinematography</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/photographer') ? 'active' : '') }}" href="{{action('Admin\PhotographerController@index')}}" ><i class="fas fa-camera"></i>Photographers <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/gallery/photos') ? 'active' : '') }}" href="{{action('Admin\PhotosController@index')}}" ><i class="fas fa-image"></i>Photos <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/gallery/category') ? 'active' : '') }}" href="{{action('Admin\CategoryController@index')}}" ><i class="fas fa-expand"></i>Category <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link {{ (Request::is('admin/users') ? 'active' : '') }}" href="{{action('Admin\UserController@index')}}" ><i class="fas fa-users"></i>Users <span class="badge badge-success">6</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>