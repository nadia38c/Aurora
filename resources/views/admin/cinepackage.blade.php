@extends('layouts.master_admin')
@section('title')
    Cinematography Package
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">All Cinematography Package</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- data table  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{action('Admin\CinePackageController@create_page')}}" class="btn btn-sm btn-primary mb-0">Add Package</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Raw</th>
                                <th>Edited</th>
                                <th>Videographers</th>
                                <th>Quality</th>
                                <th>Hrs.</th>
                                <th>Cost</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table as $row)
                                <tr>
                                    <td>{{$row->packageName}}</td>
                                    <td>{{$row->raw_footage}}</td>
                                    <td>{{$row->edited_video}}</td>
                                    <td>{{$row->videographers}}</td>
                                    <td>{{$row->vdo_quality}}</td>
                                    <td>{{$row->hours}}</td>
                                    <td>{{money($row->amount)}}</td>
                                    <td class="text-right">
                                        <a href="{{action('Admin\CinePackageController@edit_page',['id'=>$row->cinepackageID])}}" class="btn btn-space btn-primary text-white p-0 pl-1 pr-1">Edit</a>
                                        <a href="{{action('Admin\CinePackageController@del',['id'=>$row->cinepackageID])}}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-space btn-secondary text-white p-0 pl-1 pr-1">Delete</a>
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