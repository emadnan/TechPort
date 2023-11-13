@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Business Area Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readBusiness )
                  <p ><span style="font-weight:700;">Business Area : </span> {{$readBusiness->businessarea}} </p>
                      <p ><span  style="font-weight:700;">Description : </span>{{$readBusiness->description}}</p>
                      <p ><span style="font-weight:700;"> Note : </span>{{$readBusiness->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('businessArea')}}" class="btn btn-primary btn-sm">Back to Business Area </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
