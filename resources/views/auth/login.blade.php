@extends('layouts.app')
@section('content')
<div id="Login">
    <div class="row justify-content-center">
        <img id="Enmascarar_grupo_1" src="public/Enmascarar_grupo_1.png" srcset="Enmascarar_grupo_1.png 1x">

        </svg>
        <img id="n_Mesa_de_trabajo_115x" src="public/n_Mesa_de_trabajo_115x.png" srcset="n_Mesa_de_trabajo_115x.png 1x">

        <div id="FASHION">
            <span>FASHION</span>
        </div>
        <div id="CEB">
            <span>CEB</span>
        </div>
        <div id="Login_p">
            <div id="El_Arte_en_tus_Manos">
                <span>El</span><span style="font-family:Roboto;font-style:normal;font-weight:bold;font-size:70px;">
                </span>
                <span style="font-family:Segoe UI;font-style:normal;font-weight:normal;font-size:70px;">Arte</span>
                <span style="font-family:Roboto;font-style:normal;font-weight:bold;font-size:70px;">
                </span>
                <span>en tus </span>
                <span style="font-family:Segoe UI;font-style:normal;font-weight:normal;font-size:70px;">Manos</span>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div id="Usuario">
                    <label for="email" class="">{{ __('Usuario') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        
                        </span>
                        @enderror
                    </div>
                </div>

                <div id="Contrasea">
                    <label for="password" class="">{{ __('Contraseña') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        
                        </span>
                        @enderror
                    </div>
                </div>
                <div id="btn">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn">
                            {{ __('Aceptar') }}
                        </button>
                        <!-- remember y recuperar contraseña -->
                    <!-- 
                        @if (Route::has('password.request'))
                        <p></p>
                          
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>

                <div id="">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                    -->
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection