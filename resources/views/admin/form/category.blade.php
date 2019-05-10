@extends('layouts.general')
@section('title')
    Add Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Create Category</h5>
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
                    <form action="{{action('Admin\CategoryController@save')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input id="category" type="text" name="title" placeholder="Enter Category" class="form-control">
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