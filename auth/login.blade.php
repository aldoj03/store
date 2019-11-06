@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body mt-4">
                    <form method="POST" action="{{ route('login') }} ">
                        @csrf

                        <div class="form-group row justify-content-center">
                            
                            <div class="col-md-10">
                                    <label for="email" class="col-form-label pt-0 input pl-1 position-absolute">Tu correo</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Tu correo" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4  justify-content-center">
                            
                            <div class="col-md-10">
                                    <label for="password" class="pl-1 pt-0 input col-form-label  position-absolute">Tu contraseña</label>
                                <input id="password" type="password"  placeholder="Tu contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    
                                    <label class="form-check-label" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-4">
                            <div class="col-10 offset-1">
                                <button type="submit" class="btn btn-primary btn-block  h1 Combo">
                                 Iniciar sesion
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-md-10 offset-md-1 text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="col-10 offset-1 mt-2 mb-3 text-center Combo h5">                  
                         ¿aun no tienes una cuenta?                                      
                            <a href="{{ route('register') }}" class="btn btn-outline-success btn-block mt-3">
                            Registrate    
                            </a>          
                    </div>
                </div>
            </div>
                            
          
        </div>
    </div>
</div>
@endsection
