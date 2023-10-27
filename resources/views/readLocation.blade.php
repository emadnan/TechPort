@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Location Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readLocation )
                  <p ><span style="font-weight:700;">State : </span> {{$readLocation->state}} </p>
                      <p ><span  style="font-weight:700;">Region : </span>{{$readLocation->region}}</p>
                      <p ><span style="font-weight:700;"> City : </span>{{$readLocation->city}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('locationForm')}}" class="btn btn-primary btn-sm">Back to Location Page </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
