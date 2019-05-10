@extends('layouts.general')
@section('title')
    Edit Photography Package
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Edit Photography Package</h5>
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
                    <form action="{{action('Admin\PhotoPackageController@edit')}}" method="post" id="basicform" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$table->photoPackageID}}">
                        <div class="form-group">
                            <label for="type"> Package Type</label>
                            <select class="form-control" name="type" id="type">
                                <option value="">Select any one*</option>
                                <option value="Economy" {{ $table->type == 'Economy' ? 'selected' : '' }}>Economy</option>
                                <option value="Exclusive" {{ $table->type == 'Exclusive' ? 'selected' : '' }}>Exclusive</option>
                                <option value="Premium" {{ $table->type == 'Premium' ? 'selected' : '' }}>Premium</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input id="name" type="text" value="{{$table->packageName}}" name="packageName" placeholder="Enter a Package Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Printed Copy</label>
                            <input id="total_print" value="{{$table->total_print}}" type="number" name="total_print" placeholder="Enter number of Printed Copy" value="0" min="0" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="imported_album">Imported Album</label>
                            <select class="form-control" name="imported_album" id="imported_album">
                                <option value="">Select any one</option>
                                <option value="Yes" {{ $table->imported_album == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $table->imported_album == 'No' ? 'selected' : '' }}>No</option>
                                <option value="Unlimited" {{ $table->imported_album == 'Unlimited' ? 'selected' : '' }}>Unlimited</option>
                            </select>
                        </div>
                        <div class="form-group Exclusive Premium box">
                            <label for="poster_photo">Poster Photo</label>
                            <select class="form-control" name="poster_photo" id="poster_photo">
                                <option value="">Select any one</option>
                                <option value="Yes" >Yes</option>
                                <option value="No" {{ $table->poster_photo == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group Premium box">
                            <label for="bridal_story">Bridal Story Book</label>
                            <select class="form-control" name="bridal_story" id="bridal_story">
                                <option value="">Select any one</option>
                                <option value="Yes" {{ $table->bridal_story == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $table->bridal_story == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group Premium box">
                            <label for="photo_movie">Photo Movie</label>
                            <select class="form-control" name="photo_movie" id="photo_movie">
                                <option value="">Select any one</option>
                                <option value="Yes" {{ $table->photo_movie == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $table->photo_movie == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group Premium box">
                            <label for="desk_calender">Desk Calendar</label>
                            <select class="form-control" name="desk_calender" id="desk_calender">
                                <option value="">Select any one</option>
                                <option value="Yes" {{ $table->desk_calender == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ $table->desk_calender == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photographers">No. Of Photographer</label>
                            <input id="photographers" value="{{$table->photographers}}" type="number" name="photographers" placeholder="Enter The Number" value="0" min="0" class="form-control">
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
                            <input id="amount" type="number" value="{{$table->amount}}" name="amount" placeholder="Enter The Amount" value="0" step="any" class="form-control">
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#type").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
@endsection