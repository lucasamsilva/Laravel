<?php

namespace App\Http\Controllers;

use App\Author;
use App\Editora;
use App\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        $livros = Livro::paginate(5);
        return view('livros.index', ['livros' => $livros]);
    }

    public function livros_autor($id) {
        $livros = Author::find($id)->livros;

        return view('livros.livros_autor', ['livros' => $livros]);
    }

    public function livros_editora($id) {
        $livros = Editora::find($id)->livros;

        return view('livros.livros_editora', ['livros' => $livros]);
    }

    public function novo_livro() {
        $autores = Author::all();
        $editoras = Editora::all();

        return view('livros.novo_livro', ['autores' => $autores, 'editoras' => $editoras]);
    }

    public function salvar_livro(Request $request) {
        $livro = new Livro([
            'titulo' => $request['titulo'],
            'author_id' => $request['autor'],
            'editora_id' => $request['editora']
        ]);

        $livro->save();

        return redirect('/livros');
    }

    public function excluir_livro($id) {
        $livro = Livro::find($id);
        return view('livros.excluir_livro', ['livro' => $livro, 'readonly' => true]);
    }

    public function excluir($id) {
        $livro = Livro::find($id);
        $livro->delete();

        return redirect('/livros');
    }

    public function consultar_livro($id) {
        $livro = Livro::find($id);
        return view('livros.consultar_livro', ['livro' => $livro, 'readonly' => true]);
    }

    public function alterar_livro($id) {
        $livro = Livro::find($id);
        $autores = Author::all();
        $editoras = Editora::all();

        return view('livros.alterar_livro', ['livro' => $livro, 'autores' => $autores, 'editoras' => $editoras]);
    }

    public function alterar(Request $request, $id) {
        $livro = Livro::find($id);
        $livro->titulo = $request['titulo'];
        $livro->author_id = $request['autor'];
        $livro->editora_id = $request['editora'];
        $livro->save();
        
        return redirect('/livros');
    }
}
