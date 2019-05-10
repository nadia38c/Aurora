@extends('layouts.general')
@section('title')
    Add Photos
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Add Photos</h5>
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
                    <form action="{{action('Admin\PhotosController@save')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="albumID" id="category" class="form-control">
                                <option value="">Select a category</option>
                                @foreach($table as $row)
                                <option value="{{$row->albumID}}">{{$row->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="images">Image</label>
                            <input id="images" type="file" name="images[]" class="form-control" multiple>
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