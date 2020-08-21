<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

</head>

<body>
    <div>
        <div class="form-register">
            <div class="form-title">
                <span>Crie sua conta</span>
            </div>
            <form class="form-fields" method="POST" action="{{ route('registrar_usuario') }}">
                @csrf

                <div>
                    <label for="name">Nome:</label>

                    <div>
                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" autocomplete="name" autofocus />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email">E-mail:</label>

                    <div>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" autocomplete="email" />

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
                        <input id="password" type="password" class="@error('password') is-invalid @enderror"
                            name="password" autocomplete="new-password" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password-confirm">Confirme a senha:</label>

                    <div>
                        <input id="password-confirm" class="@error('password') is-invalid @enderror" type="password" name="password_confirmation"
                            autocomplete="new-password" />
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="register-options">
                        <button type="submit">
                            Concluir
                        </button>
                        @if (Route::has('login'))
                        <a href="{{ route('login') }}">Já é cadastrado? Entre aqui</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>