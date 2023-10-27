@extends('layouts.app')
@include('sidebar')
@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Mission Types') }}</b>
                    <div class="float-right">
                        <a href="{{route('dashboard')}}" class="btn btn-sm btn-primary">Back To Dashboard </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Type</th>
                            <th class="py-1">Description</th>
                            <th class="py-1">Note</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$mission )
                            <tr>
                                <td class="py-1">{{$mission -> type}}</td>
                                <td class="py-1">{{$mission -> description}}</td>
                                <td class="py-1">{{$mission -> note}}</td>
                                <td class="py-1" style="width: 230px;">
                                    <a href=" {{route('missionTypeRead', $mission -> id)}} " class="btn btn-success btn-sm py-0">View</a>  <span>|</span>  
                                    <a href=" {{route('missionTypeUpdatePage' , $mission-> id)}} " class="btn btn-warning btn-sm py-0">Update</a>  <span>|</span>  
                                    <a href="{{route('missionTypeDelete', $mission -> id)}}" class="btn btn-danger btn-sm py-0">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                            <a href="{{route('addMissionType')}}" class="btn btn-sm btn-primary">Add Mission Type </a>
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
