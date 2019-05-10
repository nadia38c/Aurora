@extends('layouts.general')
@section('title')
    Add Package
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Add a Package</h5>
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
                    <form action="{{action('Admin\CinePackageController@save')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input id="name" type="text" name="packageName" placeholder="Enter a Package Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="raw">Raw Footage</label>
                            <select class="form-control" name="raw_footage" id="raw">
                                <option value="">Select any one</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="edited_video">Edited Video</label>
                            <select class="form-control" name="edited_video" id="edited_video">
                                <option value="">Select any one</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="vdo_quality">Recording Quality</label>
                            <select class="form-control" name="vdo_quality" id="vdo_quality">
                                <option value="">Select any one</option>
                                <option value="SD/DV">SD/DV</option>
                                <option value="HD">HD</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="videographers">No. Of Videographer</label>
                            <input id="videographers" type="number" name="videographers" placeholder="Enter The Number" value="0" min="0" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="hours">Hours</label>
                            <select class="form-control" name="hours" id="hours">
                                <option value="">Select any one</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value=" Full Event"> Full Event</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input id="amount" type="number" name="amount" placeholder="Enter The Amount" value="0" step="any" class="form-control">
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