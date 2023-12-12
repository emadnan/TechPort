@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Legal Entity Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readLegalEntity )
                  <p ><span style="font-weight:700;">Name : </span> {{$readLegalEntity->name}} </p>
                      <p ><span  style="font-weight:700;">Description : </span>{{$readLegalEntity->description}}</p>
                      <p ><span style="font-weight:700;"> Note : </span>{{$readLegalEntity->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('legalEntityPage')}}" class="btn btn-primary btn-sm">Back to Legal Entity Page </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
