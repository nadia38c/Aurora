@extends('layouts.general')
@section('title')
    Booking No. #{{invoice_n($table->bookingID)}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Details</h5>
                <div class="card-body">
                    <form action="#" method="post" id="basicform" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name"> Customer Name</label>
                            <input id="name" type="text" name="packageName" placeholder="Enter a Package Name" value="{{$table->customerName}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Customer Email</label>
                            <input id="total_print" type="text"  name="total_print" placeholder="Enter number of Printed Copy" value="{{$table->customerEmail}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Phone</label>
                            <input id="total_print" type="text"  name="total_print" placeholder="Enter number of Printed Copy" value="{{$table->phone}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Address</label>
                            <input id="total_print" type="text"  name="total_print" placeholder="Enter number of Printed Copy" value="{{$table->address}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Booking Category</label>
                            <input id="total_print" type="text"  name="total_print" placeholder="Enter number of Printed Copy" value="{{$table->category}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Package Name</label>
                            <input id="total_print" type="text"  name="total_print" placeholder="Enter number of Printed Copy" value="{{$table->packageName}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="type"> Package Type</label>
                            <input id="type" type="text" class="form-control" value="@if($table->packageType == null) N/A @else {{$table->packageType}} @endif" disabled>
                        </div>
                        <div class="form-group">
                            <label for="type"> @if($table->category == 'Cinematography') Videographer @else Photographer @endif</label>
                            <input id="type" type="text" class="form-control" value="@if($table->photographer == null) N/A @else {{$table->photographer}} @endif" disabled>
                        </div>
                        <div class="form-group">
                            <label for="type"> Event Date</label>
                            <input id="type" type="text" class="form-control" value="{{pub_date($table->eventDate)}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Amount</label>
                            <input id="total_print" type="text"  name="total_print" placeholder="Enter number of Printed Copy" value="{{money($table->amount)}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="total_print"> Message</label>
                            <textarea id="total_print"  name="total_print" class="form-control" disabled>{{$table->message}}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0"></div>
                            <div class="col-sm-6 pl-0">
                                <p class="text-right">
                                    <a href="{{ URL::previous() }}" class="btn btn-space btn-secondary text-white">Back</a>
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