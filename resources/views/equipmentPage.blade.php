@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><b>{{ __('Equipments') }}</b></div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="py-1">Id-pn</th>
                            <th class="py-1">Equipments</th>
                            <th class="py-1">Note</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $id=>$equipments )
                            <tr>
                                <td class="py-1">{{$equipments -> id_pn}}</td>
                                <td class="py-1">{{$equipments -> equipment}}</td>
                                <td class="py-1">{{$equipments -> note}}</td>
                                <td class="py-1" style="width: 230px;">
                                     <a href=" {{route('equipmentRead', $equipments -> id)}} " class="btn btn-success btn-sm py-0">Read</a>  <span>|</span>  
                                    <a href=" {{route('equipmentUpdatePage' , $equipments-> id)}} " class="btn btn-warning btn-sm py-0">Update</a>  <span>|</span>  
                                    <a href="{{route('equipmentDelete', $equipments -> id)}}" class="btn btn-danger btn-sm py-0">Delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center py-2">
                        <div class="col-3" style="padding-left:40px;">
                            <a href="{{route('addEquipment')}}" class="btn btn-sm btn-primary">Add Equipment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
