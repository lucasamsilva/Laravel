<div class="container">
    <div class="row">
        <img class="mx-auto d-block" src="/storage/avatar.jpg" alt="" style="border-radius: 50%; width: 100px; height: 100px;">
    </div>
    @if (!$readonly ?? '')
        <div class="row justify-content-center">
            <div class="mt-2 mr-1">
                <label class="btn btn-primary" for="foto_perfil"><i class="fa fa-cloud-upload" aria-hidden="true"></i></label>
                <input id="foto_perfil" class="input_foto_perfil" type="file">
            </div>
            <div class="mt-2">
                <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
        </div>
    @endif
    <div class="row form-group">
        <div class="col-12">
            <label for="nome">Nome</label>
            <input @if ($readonly ?? '') readonly @endif
            value="{{ $usuario->name ?? '' }}" type="text" class="form-control @error('name') is-invalid @enderror"
            name="name" id="name" placeholder="Seu nome">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row form-group ">
        <div class="col-12">
            <label for="nome">E-mail</label>
            <input @if ($readonly ?? '') readonly @endif
            value="{{ $usuario->email ?? '' }}" type="text" class="form-control @error('email') is-invalid @enderror"
            name="email" id="email" placeholder="Seu email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @if ($novo_usuario ?? '')
        <div class="row form-group">
            <div class="col-12 col-md-6">
                <label for="nome">Senha</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="password" placeholder="Sua senha">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class=" col-12 col-md-6 mt-md-0">
                <label for="nome">Confirmar senha</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    name="password_confirmation" id="password_confirmation" placeholder="Confirme sua senha">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    @endif
    <div class="row form-group">
        <div class="ml-2 col-6 form-check">
            <input type="checkbox" class="form-check-input" @if ($readonly ?? '') disabled @endif @if ($usuario->is_active ?? '') checked
            @endif value="1" class="form-control" name="is_active" id="is_active">
            <label class="form-check-label" for="is_active">Ativo</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexoM" @if ($readonly ?? '') disabled @endif value="M" @if($usuario ?? '') @if($usuario->sexo == "M" ?? '') checked @endif @endif>
            <label class="form-check-label" for="sexoM">
                Masculino
            </label>
        </div>
        <div class="ml-2 form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexoF" @if ($readonly ?? '') disabled @endif value="F" @if($usuario ?? '') @if($usuario->sexo == "F" ?? '') checked @endif @endif>
            <label class="form-check-label" for="sexoF">
                Feminino
            </label>
        </div>
    </div>
</div>
