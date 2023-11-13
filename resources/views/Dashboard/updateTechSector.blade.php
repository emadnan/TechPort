@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <b>{{ __('Update Technology Sector') }}</b> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('techSectorUpdate')}}">
                        @csrf

                        <div class="col-md-6">
                            <input id="id" type="hidden" class="form-control" name="id" value="{{ $data->id }}" >
                        </div>
                        <div class="row mb-3">
                            <label for="techsector" class="col-md-4 col-form-label text-md-end">{{ __('Technology Sector') }}</label>

                            <div class="col-md-6">
                                <input id="techsector" type="text" class="form-control @error('techsector') is-invalid @enderror" name="techsector" value="{{ $data->techsector }}" autocomplete="techsector" autofocus required>

                                @error('techsector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="techsectordescription" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="techsectordescription" type="text" class="form-control @error('techsectordescription') is-invalid @enderror" name="techsectordescription" value="{{ $data->techsectordescription }}" autocomplete="techsectordescription" autofocus required>

                                @error('techsectordescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="id_dm" class="col-md-4 col-form-label text-md-end">{{ __('ID_DM') }}</label>

                            <div class="col-md-6">
                                <input id="id_dm" type="text" class="form-control @error('id_dm') is-invalid @enderror" name="id_dm" value="{{ $data->id_dm }}" autocomplete="id_dm" autofocus >

                                @error('id_dm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="otme" class="col-md-4 col-form-label text-md-end">{{ __('OTME') }}</label>

                            <div class="col-md-6">
                                <input id="otme" type="text" class="form-control @error('otme') is-invalid @enderror" name="otme" value="{{ $data->otme }}" autocomplete="otme" autofocus required>

                                @error('otme')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('Note') }}</label>

                            <div class="col-md-6">
                                <textarea id="note" type="text" class="form-control @error('note') is-invalid @enderror" name="note"  >{{ $data->note }}</textarea>

                                @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
