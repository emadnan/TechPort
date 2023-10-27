@extends('layouts.app')
@include('sidebar')
@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Technology Readiness Level (TRL)') }}</b>
                    <div class="float-right">
                        <a href="{{route('dashboard')}}" class="btn btn-sm btn-primary">Back To Dashboard </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">TRL Level</th>
                            <th class="py-1">Description</th>
                            <th class="py-1">TRL Example</th>
                            <th class="py-1">Note</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$trl )
                            <tr>
                                <td class="py-1">{{$trl -> trllevel}}</td>
                                <td class="py-1">{{$trl -> trldescription}}</td>
                                <td class="py-1">{{$trl -> trlexample}}</td>
                                <td class="py-1">{{$trl -> note}}</td>
                                <td class="py-1" style="width: 230px;">
                                    <a href=" {{route('trlRead', $trl -> id)}} " class="btn btn-success btn-sm py-0">View</a>  <span>|</span>  
                                    <a href=" {{route('trlUpdatePage' , $trl-> id)}} " class="btn btn-warning btn-sm py-0">Update</a>  <span>|</span>  
                                    <a href="{{route('trlDelete', $trl -> id)}}" class="btn btn-danger btn-sm py-0">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                            <a href="{{route('addTrl')}}" class="btn btn-sm btn-primary">Add TRL </a>
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
