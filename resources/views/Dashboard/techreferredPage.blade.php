@extends('layouts.app')
@include('sidebar')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8 offset-3 my-3">
            <div class="card">
                <b><div class="card-header">{{ __('Create Technology Referred') }}</div></b>

                <div class="card-body">
                    <form method="POST" action="{{route('techReferredSave')}}">
                        @csrf
                        <div class="col-md-6">
                            <input id="id" type="hidden" class="form-control" name="id">
                        </div>

                        <div class="row mb-3">
                            <label for="techarea" class="col-md-4 col-form-label text-md-end">{{ __('Technolgy Area') }}</label>

                            <div class="col-md-6">
                                <select id="techarea" type="text" class="form-control @error('techarea') is-invalid @enderror" name="techarea" value="{{ old('techarea') }}" autocomplete="techarea" autofocus required>
                                    <option selected value="">SELECT</option>
                                    @foreach ($areas as $id=>$area )
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
                                    @foreach ($sectors as $id=>$sector )
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
                                    @foreach ($niches as $id=>$niche )
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
                        

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
