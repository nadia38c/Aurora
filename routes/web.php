<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//============== user ========================
Route::get('/','User\IndexController@index');
Route::get('about','User\OtherPageController@about');
Route::get('client-review','User\OtherPageController@client_review');

//=========== Photographers ================
Route::get('photographers','User\PhotographerController@index');
Route::get('photographer-details/{id}/{slug}','User\PhotographerController@photographer_details');
//=========== /Photographers ===============

Route::get('photography/package','User\PackageController@photo_package');
Route::get('cinematography/package','User\PackageController@cine_package');


//=========== Gallery ================
Route::get('gallery','User\GalleryController@index');
Route::get('gallery/all','User\GalleryController@all_photos');
Route::get('gallery/category-wise/{id}','User\GalleryController@cat_wise_photos');
//=========== /Gallery ===============

Route::get('profile','User\OtherPageController@profile');
Route::get('faq','User\OtherPageController@faq');
Route::get('blog','User\OtherPageController@blog');
Route::get('contact','User\OtherPageController@contact');
Route::get('booking/success','User\OtherPageController@success');
//============== user ========================

Route::group(['middleware' => 'auth'], function () {

    //review
    Route::post('photographer/review/save','User\PhotographerController@review');
    //review

//=========== Package Book ===========
    Route::get('photography/package-book/{id}/{slug}','User\PackageBookingController@photo_package_booking_page');
    Route::post('photography/photo-package-book/','User\PackageBookingController@photo_book');

    Route::get('cinematography/package-book/{id}/{slug}','User\PackageBookingController@cine_package_booking_page');
    Route::post('cinematography/cine-package-book/','User\PackageBookingController@cine_book');
//=========== /Package Book ==========

//================ /Admin ===================

    Route::group(['middleware' => ['admin']], function () {
//================ Home =====================
        Route::get('admin','Admin\DashboardController@index');
//================ /Home ====================

//================= Booking ===================
        Route::get('admin/booking','Admin\BookingController@index');
        Route::get('admin/booking/details/{id}','Admin\BookingController@view_details');
        Route::get('admin/booking/confirm/{id}','Admin\BookingController@confirm');
        Route::get('admin/booking/confirmed','Admin\BookingController@confirmed');
//================= /Booking ==================

//================= Package =========================

        //=========== Photography ================
        Route::get('admin/package/photography','Admin\PhotoPackageController@index');
        Route::get('admin/package/photography-create-page','Admin\PhotoPackageController@create_page');
        Route::post('admin/package/photography-save','Admin\PhotoPackageController@save');
        Route::get('admin/package/photography-edit-page/{id}','Admin\PhotoPackageController@edit_page');
        Route::post('admin/package/photography-edit','Admin\PhotoPackageController@edit');
        Route::get('admin/package/photography-del/{id}','Admin\PhotoPackageController@del');
        //=========== /Photography ===============

        //=========== Cinematography ================
        Route::get('admin/package/cinematography','Admin\CinePackageController@index');
        Route::get('admin/package/create-page','Admin\CinePackageController@create_page');
        Route::post('admin/package/save','Admin\CinePackageController@save');
        Route::get('admin/package/edit-page/{id}','Admin\CinePackageController@edit_page');
        Route::post('admin/package/edit','Admin\CinePackageController@edit');
        Route::get('admin/package/del/{id}','Admin\CinePackageController@del');
        //=========== /Cinematography ===============

//================= /Package ========================

//================ Photographer =====================
        Route::get('admin/photographer','Admin\PhotographerController@index');
        Route::get('admin/photographer/create-page','Admin\PhotographerController@create_page');
        Route::post('admin/photographer-save','Admin\PhotographerController@save');
        Route::get('admin/photographer-edit-page/{id}','Admin\PhotographerController@edit_page');
        Route::post('admin/photographer-edit','Admin\PhotographerController@edit');
        Route::get('admin/photographer-del/{id}','Admin\PhotographerController@del');
//================ /Photographer ====================



//================ Category =====================
        Route::get('admin/gallery/category','Admin\CategoryController@index');
        Route::get('admin/gallery/category-create-page','Admin\CategoryController@create_page');
        Route::post('admin/gallery/category-save','Admin\CategoryController@save');
        Route::get('admin/gallery/category-edit-page/{id}','Admin\CategoryController@edit_page');
        Route::post('admin/gallery/category-edit','Admin\CategoryController@edit');
        Route::get('admin/gallery/category-del/{id}','Admin\CategoryController@del');
//================ /Category ====================


//================ Photos =====================
        Route::get('admin/gallery/photos','Admin\PhotosController@index');
        Route::get('admin/gallery/photos-create-page','Admin\PhotosController@create_photo_page');
        Route::post('admin/gallery/photos-save','Admin\PhotosController@save');
        Route::get('admin/gallery/photo-del/{id}','Admin\PhotosController@del');
//================ /Photos ====================


//============== User ==================
        Route::get('admin/users', 'Admin\UserController@index');
        Route::get('admin/user/edit-page/{id}', 'Admin\UserController@edit_page');
        Route::post('admin/user/edit', 'Admin\UserController@edit');
        Route::get('admin/user/del/{id}', 'Admin\UserController@del');
//============== /User =================


//================ /Admin ===================

    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
