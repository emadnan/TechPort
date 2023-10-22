@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><b>{{ __('Business Area') }}</b></div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Business Area</th>
                            <th class="py-1">Description</th>
                            <th class="py-1">Note</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$business )
                            <tr>
                                <td class="py-1">{{$business -> businessarea}}</td>
                                <td class="py-1">{{$business -> description}}</td>
                                <td class="py-1">{{$business -> note}}</td>
                                <td class="py-1" style="width: 230px;">
                                     <a href=" {{route('businessAreaRead', $business -> id)}} " class="btn btn-success btn-sm py-0">Read</a>  <span>|</span>  
                                    <a href=" {{route('updateBusiness' , $business-> id)}} " class="btn btn-warning btn-sm py-0">Update</a>  <span>|</span>  
                                    <a href="{{route('businessAreaDelete', $business -> id)}}" class="btn btn-danger btn-sm py-0">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                            <a href="{{route('addBusiness')}}" class="btn btn-sm btn-primary">Add Business Area</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
