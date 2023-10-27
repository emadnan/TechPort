@extends('layouts.app')
@include('sidebar')
@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Technology Areas') }}</b>
                    <div class="float-right">
                        <a href="{{route('dashboard')}}" class="btn btn-sm btn-primary">Back To Dashboard </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Technology Area</th>
                            <th class="py-1">Description</th>
                            <th class="py-1">Id_dm</th>
                            <th class="py-1">Otme</th>
                            <th class="py-1">Note</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$area )
                            <tr>
                                <td class="py-1">{{$area -> techarea}}</td>
                                <td class="py-1">{{$area -> techareadescription}}</td>
                                <td class="py-1">{{$area -> id_dm}}</td>
                                <td class="py-1">{{$area -> otme}}</td>
                                <td class="py-1">{{$area -> note}}</td>
                                <td class="py-1" style="width: 230px;">
                                    <a href=" {{route('techAreaRead', $area -> id)}} " class="btn btn-success btn-sm py-0">View</a>  <span>|</span>  
                                    <a href=" {{route('techAreaUpdatePage' , $area-> id)}} " class="btn btn-warning btn-sm py-0">Update</a>  <span>|</span>  
                                    <a href="{{route('techAreaDelete', $area -> id)}}" class="btn btn-danger btn-sm py-0">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                            <a href="{{route('addTechArea')}}" class="btn btn-sm btn-primary">Add Technology Area </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
