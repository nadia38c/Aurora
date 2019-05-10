@extends('layouts.general')
@section('title')
    Edit User
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Edit {{$table->name}}</h5>
                <div class="card-body">
                    <form action="{{action('Admin\UserController@edit')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$table->id}}">
                        <div class="form-group">
                            <label for="userType">User Type</label>
                            <select name="userType" id="userType" class="form-control">
                                <option value="">Select a Type</option>
                                    <option value="Admin" {{ $table->userType == 'Admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="User" {{ $table->userType == 'User' ? 'selected' : '' }}>User</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0"></div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    <a href="{{ URL::previous() }}" class="btn btn-space btn-secondary text-white">Cancel</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection