@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Mission Type Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readMissionType )
                  <p ><span style="font-weight:700;">Type : </span> {{$readMissionType->type}} </p>
                      <p ><span  style="font-weight:700;">Description : </span>{{$readMissionType->description}}</p>
                      <p ><span style="font-weight:700;"> Note : </span>{{$readMissionType->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('missionTypeForm')}}" class="btn btn-primary btn-sm">Back to Mission Type Page </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
