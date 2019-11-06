@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
    <div class="col-md-5">
            <div class="card">
                <div class="card-body mt-4">
                    <form method="POST" action="{{ route('register') }} ">
                        @csrf

                        <div class="form-group row justify-content-center">
                            
                            <div class="col-md-10">
                                    <label for="name" class="col-form-label input pt-0 pl-1 position-absolute">Tu nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Tu nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      


                        <div class="form-group row mt-4  justify-content-center">
                            
                            <div class="col-md-10">
                                    <label for="email" class="pt-0 pl-1 input col-form-label  position-absolute">Tu correo</label>
                                <input id="email" type="email"  placeholder="Tu correo" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="current-password">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4  justify-content-center">
                            
                            <div class="col-md-10">
                                    <label for="password" class="pt-0 pl-1 input col-form-label  position-absolute">Tu contraseña</label>
                                <input id="password" type="password"  placeholder="Tu contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        <div class="form-group row mt-4  justify-content-center">
                            <div class="col-md-10">
                                    <label for="password" class="pt-0 pl-1 input  col-form-label  position-absolute">Repite tu contraseña</label>
                                <input id="password-confirm" type="password"  placeholder="Repite tu contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-10 offset-1">
                                <button type="submit" class="btn btn-primary btn-block  h1 Combo">
                                 Registrate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>                        
                    <div class="col-10 offset-1 mt-2 mb-3 text-center Combo h5">                  
                             ¿Ya tienes una cuenta?                                      
                                <a href="{{ route('register') }}" class="btn btn-outline-success btn-block mt-3">
                                Inicia tu sesion    
                                </a>          
                    </div>
             
            </div>
         </div>
     </div>


















        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
