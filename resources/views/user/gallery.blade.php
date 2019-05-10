@extends('layouts.master')
@section('title')
    Gallery
@endsection
@section('style')
    <style>
        #photo_show {
            height: 100%!important;
        }
    </style>
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area gallery-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/A&E_perziurai-496.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Gallery</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- gallery area start -->
    <section class="gallery-area">
        <div class="container">
            <div class="row masonry-menu pt-50 pb-50">
                <div class="col-xl-12">
                    <div class="gallry-menu mb-30" id="categoryClick">
                        @foreach($table as $row)
                        <a href="{{action('User\GalleryController@cat_wise_photos',['id' => $row->albumID])}}">{{$row->title}}</a>
                         @endforeach
                    </div>
                </div>
            </div>
            <div style="height: 100%!important; margin-bottom: 20px;" class="row gallery-active" id="photo_show">

            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        // course filter
        $(function () {
            $(function () {
                contents("{{action('User\GalleryController@all_photos')}}");
                $('#categoryClick a').click(function (e) {
                    e.preventDefault();
                    var url1 = $(this).attr('href');
                    contents(url1);
                });
            });

            function contents(url1) {
                $.get(url1, function(result1){
                    var show_data1 = '';
                    $.each(result1, function( i, row ) {
                        show_data1 += '<div class="col-md-4 grid-item cat2 cat4 cat7">\n' +
                            '                    <div class="single-gallery mb-30">\n' +
                            '                        <img value="'+row.galleryID+'" src="./public/uploads/gallery/'+row.images+'" alt="img" />\n' +
                            '                        <div class="overlay">\n' +
                            '                            <div class="overlay-content">\n' +
                            '                                <div class="gallery-header-social-1">\n' +
                            '                                    <a href=""><i class="fa fa-facebook"></i></a>\n' +
                            '                                    <a href=""><i class="fa fa-twitter"></i></a>\n' +
                            '                                </div>\n' +
                            '                                <div class="gallery-header-social-2">\n' +
                            '                                    <a href=""><i class="fa fa-youtube"></i></a>\n' +
                            '                                    <a href=""><i class="fa fa-google-plus"></i></a>\n' +
                            '                                </div>\n' +
                            '                            </div>\n' +
                            '                        </div>\n' +
                            '                    </div>\n' +
                            '                </div>'
                    });

                    $('#photo_show').html(show_data1);
                });
            }
        });
    </script>
@endsection