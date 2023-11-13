@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <b>{{ __('Update Priority') }}</b> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('priorityUpdate')}}">
                        @csrf

                        <div class="col-md-6">
                            <input id="id" type="hidden" class="form-control" name="id" value="{{ $data->id }}" >
                        </div>
                        <div class="row mb-3">
                            <label for="priority" class="col-md-4 col-form-label text-md-end">{{ __('Priority') }}</label>

                            <div class="col-md-6">
                                <input id="priority" type="text" class="form-control @error('priority') is-invalid @enderror" name="priority" value="{{ $data->priority }}" autocomplete="priority" autofocus required>

                                @error('priority')
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
