@extends('layouts.app')

@section('content')

                <div class="topsection">
<div class="container registration"> 
    <div class="notification has-text-centered">
     <strong>{{ __('Reset Password') }}</strong>
    </div>

                <!-- <div class="notification">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                <div class="container">
                <div class="columns">
                    <div class="column">
                    @if (session('status'))
                    <div class="notification is-success">
                        <button class="delete"></button>
                        {{ session('status') }}
                    </div>
                    @endif
                    </div>
                </div>
                </div>



                <form method="POST" action="{{ route('password.email') }}"">
      @csrf 
      


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
<div class="field is-grouped">
  <div class="control">
    <button class="button is-link"> {{ __('Send Password Reset Link') }}</button>
  </div>
 
</div>

                       

</div>

</form>                
@endsection
<script>
$(document).on('click', '.notification > button.delete', function() {
    $(this).parent().addClass('is-hidden');
    return false;
});
</script>