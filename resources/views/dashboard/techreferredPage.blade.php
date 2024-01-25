@extends('layouts.app')
@include('sidebar')
@section('content')


<div class="modal fade" id="form-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modal_title">{{ __('Create Technology Referred') }}</h4>
        </div>
        <div class="modal-body">
                <form id="form">
                        <div class="col-md-6">
                            <input id="id" type="hidden" class="form-control" name="id">
                        </div>

                        <div class="row mb-3">
                            <label for="techarea" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Area') }}</label>

                            <div class="col-md-6">
                                <select id="techarea" type="text" class="form-control @error('techarea') is-invalid @enderror" name="techarea" value="{{ old('techarea') }}" autocomplete="techarea" autofocus required>
                                    <option selected value="">SELECT</option>
                                    @foreach ($areas as $area )
                                    <option value="{{$area-> id}}">{{$area-> techarea}}</option>
                                    @endforeach
                                </select>

                                @error('techarea')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="techsector" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Sector') }}</label>

                            <div class="col-md-6">
                                <select id="techsector" class="form-control @error('techsector') is-invalid @enderror" name="techsector" value="{{ old('techsector') }}" autocomplete="techsector" autofocus required>
                                    <option selected value="">SELECT</option>
                                    @foreach ($sectors as $sector )
                                    <option value="{{$sector-> id}}">{{$sector-> techsector}}</option>
                                    @endforeach
                                </select>

                                @error('techsector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="techniche" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Niche') }}</label>

                            <div class="col-md-6">
                                <select id="techniche" class="form-control @error('techniche') is-invalid @enderror" name="techniche" value="{{ old('techniche') }}" autocomplete="techniche" autofocus required>
                                    <option selected value="">SELECT</option>
                                    @foreach ($niches as $niche )
                                    <option value="{{$niche-> id}}">{{$niche-> techniche}}</option>
                                    @endforeach
                                </select>

                                @error('techniche')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>


<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8 offset-3 my-3">
            <div class="card">
                <div class="card-header">
                    <b>{{ __('Technology Referred') }}</b>
                    <div class="float-right">
                        <button type="button" class="btn btn-success btn-sm"  id="add-btn" >Add Technology Referred </button>
                    </div>
                </div>
                <div class="card-body">
                  <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                        <th class="py-1">Technology Area</th>
                        <th class="py-1">Technology Sector</th>
                        <th class="py-1">Technolgy Niche</th>
                    </thead>
                    <tbody>
                    @foreach ($techrefs as $techref )
                        <tr>
                            <td>{{$techref->id_techarea}}</td>
                            <td>{{$techref->id_techsector}}</td>
                            <td>{{$techref->id_techniche}}</td>
                        </tr>
                    @foreach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
     $(document).ready(function(){
        
        $.ajaxSetup({
                headers: { 
                    'x-csrf-token' : $('meta[name="csrf-token"]').attr('content')
                 }
            });
            });
    
        $('#add-btn').click(function(){
           $('#form-modal').modal('show');

            });
</script>
@endsection
