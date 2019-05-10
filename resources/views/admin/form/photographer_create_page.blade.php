@extends('layouts.general')
@section('title')
    Add Photographer
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Add a Photographer</h5>
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
                    <form action="{{action('Admin\PhotographerController@save')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input id="name" type="text" name="name" placeholder="Enter Photographer Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input id="designation" type="text" name="designation" placeholder="Enter Designation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Email</label>
                            <input id="designation" type="text" name="email" placeholder="Enter Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Phone</label>
                            <input id="designation" type="text" name="phone" placeholder="Enter Phone No-" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook UserName</label>
                            <input id="facebook" type="text" name="facebook" placeholder="Enter facebook username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="twitter">Twitter UserName</label>
                            <input id="twitter" type="text" name="twitter" placeholder="Enter Twitter UserName" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="designation">Instagram UserName</label>
                            <input id="insta" type="text" name="instagram" placeholder="Enter Instagram UserName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="designation">Description</label>
                            <textarea id="designation" name="description" cols="2" rows="2" placeholder="Enter description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="images">Image</label>
                            <input onchange="document.getElementById('photographerImage').src = window.URL.createObjectURL(this.files[0])" id="images" type="file" name="imageName" class="form-control">
                        </div>

                        <div class="form-group">
                            <img id="photographerImage" width="300" height="300" alt="image">
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