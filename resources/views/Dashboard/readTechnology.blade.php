@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Technology Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$read )
                  <p ><span style="font-weight:700;">Technology : </span> {{$read->technology}} </p>
                  <p ><span style="font-weight:700;">ID_DM : </span> {{$read->id_dm}} </p>
                  <p ><span style="font-weight:700;"> Note : </span>{{$read->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('techologyPage')}}" class="btn btn-primary btn-sm">Back to Technology Sub Sector </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
