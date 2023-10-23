@extends('layouts.app')


@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Update Equipment') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('equipmentUpdate' , $data->id ) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="id_pn" class="col-md-4 col-form-label text-md-end">{{ __('Id-pn') }}</label>

                            <div class="col-md-6">
                                <input id="id_pn" type="text" class="form-control @error('id_pn') is-invalid @enderror" name="id_pn" value="{{ $data->id_pn }}" required  autofocus>
                                

                                @error('id_pn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="equipment" class="col-md-4 col-form-label text-md-end">{{ __('Equipment') }}</label>

                            <div class="col-md-6">
                                <input id="equipment" type="text" class="form-control @error('equipment') is-invalid @enderror" name="equipment" value="{{ $data->equipment }}" required>

                                @error('equipment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('Note') }}</label>

                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value="{{ $data->note }}">

                                @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    {{ __('Update') }}
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
