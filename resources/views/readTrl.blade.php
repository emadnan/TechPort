@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Technology Readiness Level(TRL) Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$read )
                  <p ><span style="font-weight:700;">TRL Level : </span> {{$read->trllevel}} </p>
                  <p ><span style="font-weight:700;">Description : </span> {{$read->trldescription}} </p>
                  <p ><span style="font-weight:700;">TRL Example : </span> {{$read->trllevel}} </p>
                  <p ><span style="font-weight:700;"> Note : </span>{{$read->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('trlPage')}}" class="btn btn-primary btn-sm">Back to TRL Page </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
