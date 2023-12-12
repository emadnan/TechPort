@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Equipment Details') }}</b></div>
                <div class="card-body">
                  @foreach ($data as $id=>$readEquipment )
                  <p ><span style="font-weight:700;">Id-pn : </span> {{$readEquipment->id_pn}} </p>
                      <p ><span  style="font-weight:700;">Equipment : </span>{{$readEquipment->equipment}}</p>
                      <p ><span style="font-weight:700;"> Note : </span>{{$readEquipment->note}} </p>
                      @endforeach

                      <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:0px;">
                            <a href="{{route('equipmentPage')}}" class="btn btn-primary btn-sm">Back to Equipment </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
