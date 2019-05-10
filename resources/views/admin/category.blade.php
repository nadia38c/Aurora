@extends('layouts.master_admin')
@section('title')
    Category
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">All categories</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- data table  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{action('Admin\CategoryController@create_page')}}" class="btn btn-sm btn-primary mb-0">Add Category</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table as $row)
                            <tr>
                                <td>{{$row->created_at->format('d/m/y')}}</td>
                                <td>{{$row->title}}</td>
                                <td class="text-right">
                                    <a href="{{action('Admin\CategoryController@edit_page',['id'=>$row->albumID])}}" class="btn btn-space btn-primary text-white p-0 pl-1 pr-1">Edit</a>
                                    <a href="{{action('Admin\CategoryController@del',['id'=>$row->albumID])}}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-space btn-secondary text-white p-0 pl-1 pr-1">Delete</a>
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