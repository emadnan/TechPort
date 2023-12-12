@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Human Entity Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readHumanEntity )
                  <p ><span style="font-weight:700;">Name : </span> {{$readHumanEntity->name}} </p>
                      <p ><span  style="font-weight:700;">SurName : </span>{{$readHumanEntity->surname}}</p>
                      <p ><span  style="font-weight:700;">Email : </span>{{$readHumanEntity->email}}</p>
                      <p ><span  style="font-weight:700;">Tel : </span>{{$readHumanEntity->tel}}</p>
                      <p ><span  style="font-weight:700;">Role : </span>{{$readHumanEntity->role}}</p>
                      <p ><span style="font-weight:700;"> Note : </span>{{$readHumanEntity->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('humanEntityPage')}}" class="btn btn-primary btn-sm">Back to Human Entity Page </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
