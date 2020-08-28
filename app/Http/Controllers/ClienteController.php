<?php

namespace App\Http\Controllers;

use App\clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function novo_cliente() {
        return view('cliente.incluir');
    }

    public function salvar_cliente(Request $request) {
        $cliente = new clientes([
            'nome' => $request['nome'],
            'telefone' => $request['telefone'],
            'cpf' => $request['cpf'],
            'rg' => $request['rg'],
            'endereco' => $request['endereco']
        ]);

        $cliente->save();

        return redirect('/clientes');
    }

    public function alterar_cliente($id) {
        $cliente = clientes::find($id);
        return view('cliente.alterar', ['cliente' => $cliente]);
    }

    public function excluir_cliente($id) {
        $cliente = clientes::find($id);
        return view('cliente.excluir', ['cliente' => $cliente, 'readonly' => true]);
    }

    public function alterar(Request $request, $id) {
        $cliente = clientes::find($id);
        $cliente->nome = $request['nome'];
        $cliente->telefone = $request['telefone'];
        $cliente->cpf = $request['cpf'];
        $cliente->rg = $request['rg'];
        $cliente->endereco = $request['endereco'];
        $cliente->save();
        
        return redirect('/clientes');
    }

    public function excluir(Request $request, $id) {
        $cliente = clientes::find($id);
        
        $cliente->delete();

        return redirect('/clientes');
    }
    
    public function index()
    {
        $clientes = clientes::paginate(5);
        return view('cliente.index', ['clientes' => $clientes]);
    }

}
