@extends('layouts.app')



@section('content')
<div class="topsection">
<div class="container registration"> 
    <div class="notification has-text-centered">
     <strong>{{ __('Sign  Up') }}</strong>
    </div>
 <form method="POST" action="{{ route('register') }}">
      @csrf 

<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input id="name" class="input" type="text"{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
    @if ($errors->has('name'))
    <span class="notification is-danger" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
   </div>
</div>

<div class="field">
  <label class="label">Email</label>
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
  <label class="label">Password</label>
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
    <button class="button is-link"> {{ __('Register') }}</button>
  </div>
 
</div>

 </form>                          






















































</div>





@endsection
