@extends('layouts.master_admin')
@section('title')
    Category
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">All Photos</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- data table  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{action('Admin\PhotosController@create_photo_page')}}" class="btn btn-sm btn-primary mb-0">Add Photos</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table as $row)
                                <tr>
                                    <td>{{$row->created_at->format('d/m/y')}}</td>
                                    <td>{{$row->album['title']}}</td>
                                    <td><img width="50" height="40" src="{{asset('public/uploads/gallery/'.$row->images)}}" alt=""></td>
                                    <td class="text-right">
                                        <a href="{{action('Admin\PhotosController@del',['id'=>$row->galleryID])}}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-space btn-secondary text-white p-0 pl-1 pr-1">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection