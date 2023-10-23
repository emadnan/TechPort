@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Business Area Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readDefinition )
                  <p ><span style="font-weight:700;">Name : </span> {{$readDefinition->name}} </p>
                      <p ><span  style="font-weight:700;">Definition : </span>{{$readDefinition->definition}}</p>
                      <p ><span  style="font-weight:700;">Report : </span>{{$readDefinition->report}}</p>
                      <p ><span style="font-weight:700;"> Note : </span>{{$readDefinition->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('definitionPage')}}" class="btn btn-primary btn-sm">Back to Definitions </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
