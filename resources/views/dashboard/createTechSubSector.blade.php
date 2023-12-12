@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Technology Niche') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('techSubSectorCreate')}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="techniche" class="col-md-4 col-form-label text-md-end">{{ __('Technology Niche') }}</label>

                            <div class="col-md-6">
                                <input id="techniche" type="text" class="form-control @error('techniche') is-invalid @enderror" name="techniche" value="{{ old('techniche') }}" autocomplete="techniche" autofocus required>

                                @error('techniche')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="technichedescription" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="technichedescription" type="text" class="form-control @error('technichedescription') is-invalid @enderror" name="technichedescription" value="{{ old('technichedescription') }}" autocomplete="technichedescription" autofocus required>

                                @error('technichedescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="id_dm" class="col-md-4 col-form-label text-md-end">{{ __('Id-Dm') }}</label>

                            <div class="col-md-6">
                                <input id="id_dm" type="text" class="form-control @error('id_dm') is-invalid @enderror" name="id_dm" value="{{ old('id_dm') }}" autocomplete="id_dm" autofocus >

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
                                <input id="otme" type="text" class="form-control @error('otme') is-invalid @enderror" name="otme" value="{{ old('otme') }}" autocomplete="otme" autofocus required>

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
                                <textarea id="note" type="text" class="form-control @error('note') is-invalid @enderror" name="note" value="{{ old('note') }}" ></textarea>

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
