@extends('layouts.general')
@section('title')
    Edit Package
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Edit Package</h5>
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
                    <form action="{{action('Admin\CinePackageController@edit')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$table->cinepackageID}}">
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input id="name" type="text" name="packageName" value="{{$table->packageName}}" placeholder="Enter a Package Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="raw">Raw Footage</label>
                            <select class="form-control" name="raw_footage" id="raw">
                                <option value="">Select any one</option>
                                <option value="Yes" {{ $table->raw_footage == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $table->raw_footage == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="edited_video">Edited Video</label>
                            <select class="form-control" name="edited_video" id="edited_video">
                                <option value="">Select any one</option>
                                <option value="Yes" {{ $table->edited_video == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $table->edited_video == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="vdo_quality">Recording Quality</label>
                            <select class="form-control" name="vdo_quality" id="vdo_quality">
                                <option value="">Select any one</option>
                                <option value="SD/DV" {{ $table->vdo_quality == 'SD/DV' ? 'selected' : '' }}>SD/DV</option>
                                <option value="HD" {{ $table->vdo_quality == 'HD' ? 'selected' : '' }}>HD</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="videographers">No. Of Videographer</label>
                            <input id="videographers" type="number" name="videographers" placeholder="Enter The Number" value="{{$table->videographers}}" min="0" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="hours">Hours</label>
                            <select class="form-control" name="hours" id="hours">
                                <option value="">Select any one</option>
                                <option value="1" {{ $table->hours == 1 ? 'selected' : '' }}>1</option>
                                <option value="2" {{ $table->hours == 2 ? 'selected' : '' }}>2</option>
                                <option value="3" {{ $table->hours == 3 ? 'selected' : '' }}>3</option>
                                <option value="4" {{ $table->hours == 4 ? 'selected' : '' }}>4</option>
                                <option value="5" {{ $table->hours == 5 ? 'selected' : '' }}>5</option>
                                <option value="6" {{ $table->hours == 6 ? 'selected' : '' }}>6</option>
                                <option value=" Full Event" {{ $table->hours == 'Full Event' ? 'selected' : '' }}> Full Event</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input id="amount" type="number" name="amount" placeholder="Enter The Amount" value="{{$table->amount}}" step="any" class="form-control">
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