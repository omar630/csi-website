<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">Log In</h5>

        <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email"
                        class="form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="password"
                        class="form-label text-md-right">{{ __('Password') }}</label>

                    
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                </div>

                <div class="form-group row">
                    <div class="offset-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="offset-md-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
        </form>
    </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->
