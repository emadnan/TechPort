@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Found Source Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readFoundSource )
                  <p ><span style="font-weight:700;">Code : </span> {{$readFoundSource->code}} </p>
                      <p ><span  style="font-weight:700;">Name : </span>{{$readFoundSource->name}}</p>
                      <p ><span style="font-weight:700;"> Note : </span>{{$readFoundSource->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('foundSourceForm')}}" class="btn btn-primary btn-sm">Back to Found Source </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
