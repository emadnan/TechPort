@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Technology Area Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$read )
                  <p ><span style="font-weight:700;">Technology Area : </span> {{$read->techarea}} </p>
                  <p ><span style="font-weight:700;">Description : </span> {{$read->techareadescription}} </p>
                  <p ><span style="font-weight:700;">ID_DM : </span> {{$read->id_dm}} </p>
                  <p ><span style="font-weight:700;">OTME : </span> {{$read->otme}} </p>
                  <p ><span style="font-weight:700;"> Note : </span>{{$read->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('techAreaPage')}}" class="btn btn-primary btn-sm">Back to Technology Area Page </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
