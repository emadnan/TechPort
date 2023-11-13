@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <b>{{ __('Update Technology Readiness Level(TRL) ') }}</b> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('trlUpdate')}}">
                        @csrf

                        <div class="col-md-6">
                            <input id="id" type="hidden" class="form-control" name="id" value="{{ $data->id }}" >
                        </div>
                        <div class="row mb-3">
                            <label for="trllevel" class="col-md-4 col-form-label text-md-end">{{ __('TRL Level') }}</label>

                            <div class="col-md-6">
                                <input id="trllevel" type="text" class="form-control @error('trllevel') is-invalid @enderror" name="trllevel" value="{{ $data->trllevel }}" autocomplete="trllevel" autofocus required>

                                @error('trllevel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="trldescription" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="trldescription" type="text" class="form-control @error('trldescription') is-invalid @enderror" name="trldescription" value="{{ $data->trldescription }}" autocomplete="trldescription" autofocus required>

                                @error('trldescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="trlexample" class="col-md-4 col-form-label text-md-end">{{ __('TRL Example') }}</label>

                            <div class="col-md-6">
                                <input id="trlexample" type="text" class="form-control @error('trlexample') is-invalid @enderror" name="trlexample" value="{{ $data->trlexample }}" autocomplete="trlexample" autofocus required>

                                @error('trlexample')
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
