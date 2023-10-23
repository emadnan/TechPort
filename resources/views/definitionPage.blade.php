@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><b>{{ __('Definitions') }}</b></div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Name</th>
                            <th class="py-1">Definition</th>
                            <th class="py-1">Report</th>
                            <th class="py-1">Note</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$definitions )
                            <tr>
                                <td class="py-1">{{$definitions -> name}}</td>
                                <td class="py-1">{{$definitions -> definition}}</td>
                                <td class="py-1">{{$definitions -> report}}</td>
                                <td class="py-1">{{$definitions -> note}}</td>
                                <td class="py-1" style="width: 230px;">
                                     <a href=" {{route('definitionRead', $definitions -> id)}} " class="btn btn-success btn-sm py-0">Read</a>  <span>|</span>  
                                    <a href=" {{route('definitionUpdatePage' , $definitions-> id)}} " class="btn btn-warning btn-sm py-0">Update</a>  <span>|</span>  
                                    <a href="{{route('definitionDelete', $definitions -> id)}}" class="btn btn-danger btn-sm py-0">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                            <a href="{{route('addDefinition')}}" class="btn btn-sm btn-primary">Add Definition</a>
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
