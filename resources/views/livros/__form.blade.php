<div class="form-group container">
    <div class="row">
        <div class="col-12">
            <label for="titulo">Título do Livro</label>
            <input @if ($readonly ?? '') readonly @endif
            value="{{ $livro->titulo ?? '' }}" type="text" class="form-control" name="titulo" id="titulo"
            placeholder="Título do livro">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <label for="autor">Autor</label>
            <select @if ($readonly ?? '') readonly @endif class="form-control" name="autor" id="autor"
                placeholder="Título do livro">
                @if ($autores ?? '')
                    <option value="{{ $livro->autor->id ?? '' }}">{{$livro->autor->nome ?? 'Escolha um Autor'}}</option>
                    @foreach ($autores as $autor)
                        <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
                    @endforeach
                @else
                    <option value="{{ $livro->autor->id }}">{{ $livro->autor->nome }}</option>
                @endif
            </select>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <label for="editora">Editora</label>
            <select @if ($readonly ?? '') readonly @endif
                class="form-control" name="editora" id="editora">
                @if ($editoras ?? '')
                    <option value="{{ $livro->editora->id ?? '' }}">{{$livro->editora->nome ?? 'Escolha um Editora'}}</option>
                    @foreach ($editoras as $editora)
                        <option value="{{ $editora->id }}">{{ $editora->nome }}</option>
                    @endforeach
                @else
                    <option value="{{ $livro->editora->id }}">{{ $livro->editora->nome }}</option>
                @endif

            </select>
        </div>
    </div>
</div>
