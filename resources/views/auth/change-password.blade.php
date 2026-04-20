@extends('layout.master')
@section('content')
    
<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div
            class="d-flex align-content-center justify-content-center"
        >
        <form method="POST" action="/change-password">
            @csrf
            <div class="card">
                <div class="card-body d-grid gap-2">
                    <h4 class="card-title pb-4">
                        Change Password
                    </h4>
                    <div class="text-center">
                        @if(session('error'))
                           <div class="alert alert-danger" style="width:100%; margin:auto">
                          <b>{!!session('error')!!}</b></div>
                       @endif
                   </div>
                   <div class="text-center">
                    @if(session('success'))
                    <div class="alert alert-success" style="width:100%; margin:auto">
                        {{session('success')}}</div>
                    @endif
                 </div>
                    <div class="form-group row">
                        <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                        <div class="col-md-6">
                            <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required>

                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                        <div class="col-md-6">
                            <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required>

                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

                        <div class="col-md-6">
                            <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Change Password') }}
                            </button>
                        </div>
                    </div>

                    <p class="card-text" style="opacity: 0">
                        It is a long established fact that a reader
                        will be distracted by the readable content
                        of a page when looking at its layout.
                    </p>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection