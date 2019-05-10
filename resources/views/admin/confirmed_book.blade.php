@extends('layouts.master_admin')
@section('title')
    Confirmed Booking
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">All Confirmed Booking</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- data table  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Package Name</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Event Date</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table as $row)
                                <tr>
                                    <td>{{pub_date($row->created_at)}}</td>
                                    <td>{{$row->customerName}}</td>
                                    <td>{{$row->category}}</td>
                                    <td>{{$row->packageName}}</td>
                                    <td>
                                        @if($row->packageType == null)
                                            N/A
                                        @else
                                            {{$row->packageType}}
                                        @endif
                                    </td>
                                    <td>{{money($row->amount)}}</td>
                                    <td>{{pub_date($row->eventDate)}}</td>
                                    <td class="text-right">
                                        <a href="{{action('Admin\BookingController@view_details',['id'=>$row->bookingID])}}" class="btn btn-space btn-primary text-white p-0 pl-1 pr-1">view</a>
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