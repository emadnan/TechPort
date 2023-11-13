@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Technology') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('technologyCreate')}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="technology" class="col-md-4 col-form-label text-md-end">{{ __('Technology') }}</label>

                            <div class="col-md-6">
                                <input id="technology" type="text" class="form-control @error('technology') is-invalid @enderror" name="technology" value="{{ old('technology') }}" autocomplete="technology" autofocus required>

                                @error('technology')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="id_dm" class="col-md-4 col-form-label text-md-end">{{ __('Id-Dm') }}</label>

                            <div class="col-md-6">
                                <input id="id_dm" type="text" class="form-control @error('id_dm') is-invalid @enderror" name="id_dm" value="{{ old('id_dm') }}" autocomplete="id_dm" autofocus required>

                                @error('id_dm')
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
