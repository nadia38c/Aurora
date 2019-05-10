@extends('layouts.general')
@section('title')
    Edit Photographer
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Edit Photographer</h5>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{action('Admin\PhotographerController@edit')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$table->photographerID}}">
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input id="name" type="text" value="{{$table->name}}" name="name" placeholder="Enter Photographer Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input id="designation" type="text" name="designation" value="{{$table->designation}}" placeholder="Enter Designation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Email</label>
                            <input id="designation" type="text" name="email" value="{{$table->email}}" placeholder="Enter Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Phone</label>
                            <input id="designation" type="text" name="phone" value="{{$table->phone}}" placeholder="Enter Phone No-" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook UserName</label>
                            <input id="facebook" type="text" name="facebook" value="{{$table->facebook}}" placeholder="Enter facebook username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="twitter">Twitter UserName</label>
                            <input id="twitter" type="text" name="twitter" value="{{$table->twitter}}" placeholder="Enter Twitter UserName" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="designation">Instagram UserName</label>
                            <input id="insta" type="text" name="instagram" value="{{$table->instagram}}" placeholder="Enter Instagram UserName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Description</label>
                            <textarea id="designation" name="description" cols="2" rows="2" placeholder="Enter description" class="form-control">{{$table->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="images">Image</label>
                            <input value="{{$table->imageName}}" onchange="document.getElementById('photographerImage').src = window.URL.createObjectURL(this.files[0])" id="images" type="file" name="imageName" class="form-control">
                        </div>

                        <div class="form-group">
                            <img id="photographerImage" width="300" height="300" src="{{asset('public/uploads/photographers/'.$table->imageName)}}" alt="image">
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