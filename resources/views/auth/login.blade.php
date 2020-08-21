<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

</head>
<body>
    <div>
        <div class="form-login">
            <div class="logo">
                <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>
                <span>Oficinet</span>
            </div>
            <form class="form-fields" method="POST" action="{{ route('login') }}">
                @csrf
                
                <div>
                    <label for="email">E-mail: </label>

                    <div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password">Senha:</label>

                    <div>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    </div>
                </div>

                    <div class="login-options">
                        <button type="submit">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha? Clique aqui') }}
                            </a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('registrar') }}">Ainda não tem conta? Registre-se aqui</a>
                        @endif
                    </div>
            </form>
        </div>
    </div>
</body>
</html>

