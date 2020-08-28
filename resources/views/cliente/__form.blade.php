<div class="form-group container">
        <div class="row">
            <div class="col-6">
                <label for="nome">Nome</label>
            <input @if($readonly ?? '') readonly @endif value="{{ $cliente->nome ?? '' }}" type="text" class="form-control" name="nome" id="nome" placeholder="Seu Nome">
            </div>
            <div class="col-6">
                <label for="cpf">CPF</label>
                <input @if($readonly ?? '') readonly @endif value="{{ $cliente->cpf ?? '' }}" type="text" class="form-control" name="cpf" id="cpf" placeholder="Seu CPF">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label for="rg">RG</label>
                <input @if($readonly ?? '') readonly @endif value="{{ $cliente->rg ?? '' }}" type="text" class="form-control" name="rg" id="rg" placeholder="Seu RG">
            </div>
            <div class="col-6">
                <label for="telefone">Telefone</label>
                <input @if($readonly ?? '') readonly @endif value="{{ $cliente->telefone ?? '' }}" type="text" class="form-control" name="telefone" id="telefone" placeholder="Seu Telefone">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <label for="endereco">Endereço</label>
                <input @if($readonly ?? '') readonly @endif value="{{ $cliente->endereco ?? '' }}" type="text" class="form-control" name="endereco" id="endereco" placeholder="Seu Endereço">
            </div>
        </div>
</div>
