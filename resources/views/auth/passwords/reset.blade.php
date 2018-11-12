@extends('layouts.app')

@section('content')
<div class="topsection">
<div class="container registration"> 
    <div class="notification has-text-centered">
     <strong>{{ __('Reset Password') }}</strong>
    </div>
 <form method="POST" action="{{ route('password.update') }}">
      @csrf 
      <input type="hidden" name="token" value="{{ $token }}">


<div class="field">
  <label class="label">{{ __('E-Mail Address') }}</label>
  <div class="control">
    <input id="email" class="input" type="email"{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    @if ($errors->has('email'))
    <span class="notification is-danger" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
   </div>
</div>

<div class="field">
  <label class="label">{{ __('Password') }}</label>
  <div class="control">
    <input id="password" class="input" type="password"{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>
    @if ($errors->has('password'))
    <span class="notification is-danger" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
   </div>
</div>

<div class="field">
  <label class="label">{{ __('Confirm Password') }}</label>
  <div class="control">
    <input id="password-confirm" class="input" type="password" name="password_confirmation"  required>
  </div>
</div>
<div class="field is-grouped">
  <div class="control">
    <button class="button is-link"> {{ __('Reset Password') }}</button>
  </div>
 
</div>

                       

</div>

 </form> 
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
