@extends('layouts.master_admin')
@section('title')
    Photographers
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">All Photographers</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- data table  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{action('Admin\PhotographerController@create_page')}}" class="btn btn-sm btn-primary mb-0">Add Photographer</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table as $row)
                                <tr>
                                    <td>{{$row->photographerID}}</td>
                                    <td><img width="50" height="40" src="{{asset('public/uploads/photographers/'.$row->imageName)}}" alt=""></td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->designation}}</td>
                                    <td>{{$row->facebook}}</td>
                                    <td>{{$row->twitter}}</td>
                                    <td>{{$row->instagram}}</td>
                                    <td class="text-right">
                                        <a href="{{action('Admin\PhotographerController@edit_page',['id'=>$row->photographerID])}}" class="btn btn-space btn-primary text-white p-0 pl-1 pr-1">Edit</a>
                                        <a href="{{action('Admin\PhotographerController@del',['id'=>$row->photographerID])}}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-space btn-secondary text-white p-0 pl-1 pr-1">Delete</a>
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