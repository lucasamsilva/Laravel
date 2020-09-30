<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = User::paginate(5);
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function novo_usuario() {
        $usuario = User::class;
        return view('usuarios.novo_usuario', ['novo_usuario' => 'true', 'readonly' => false]);
    }

    public function registrar(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required'
        ]);

        $usuario = new User([
            'name' => $request['name'],
            'email' => $request['email'],
            'sexo' => $request['sexo'],
            'is_active' => $request['is_active'],
            'password' => Hash::make($request['password'])
        ]);

        if($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()){

            $name = $request->file('profile_pic')->getClientOriginalName();
            $horario = time();
    
            $filename = "{$horario}_{$name}";
            $databasename = "/storage/img/{$filename}";
    
            $upload = $request->file('profile_pic')->storeAs('img', $filename);
            if(!$upload) {
                return redirect()->back()->with('error', 'falha ao fazer upload')->withInput();
            }
            $usuario->profile_pic = $databasename;
        }

        if($usuario->is_active == null) {
            $usuario->is_active = 0;
        }

        $usuario->save();

        return redirect('/usuarios');
    }

    public function get_alterar_usuario($id){
        $usuario = User::find($id);
        return view('usuarios.alterar_usuario', ['usuario' => $usuario, 'novo_usuario' => false, 'readonly' => false]);
    }

    public function alterar_usuario(Request $request, $id) {

      
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required'
        ]);

        $usuario = User::find($id);
        $filename = null;

        if($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()){

            $name = $request->file('profile_pic')->getClientOriginalName();
            $horario = time();
    
            $filename = "{$horario}_{$name}";
            $databasename = "/storage/img/{$filename}";
    
            $upload = $request->file('profile_pic')->storeAs('img', $filename);
            if(!$upload) {
                return redirect()->back()->with('error', 'falha ao fazer upload')->withInput();
            }
            $usuario->profile_pic = $databasename;
        }

        if($usuario->email == $request['email']) {
            $usuario->name = $request['name'];
            $usuario->sexo = $request['sexo'];
        } else {
            if(DB::table('users')->where('email', $request['email'])->exists()) {
                $validator->errors()->add('email', 'E-mail já cadastrado');
            }
        }

        if(count($validator->errors()->messages()) > 0) {
            return redirect("/usuarios/alterar/{$id}")->withErrors($validator)->withInput();
        }

        if($request['is_active'] == null) {
            $usuario->is_active = 0;
        } else {
            $usuario->is_active = 1;
        }

        $usuario->save();

        return redirect('/usuarios');
    }
    
    public function visualizar_usuario($id) {

        $usuario = User::find($id);
        return view('usuarios/visualizar_usuario', ['usuario' => $usuario, 'readonly' => true]);
    }

    public function get_excluir_usuario($id) {
        $usuario = User::find($id);
        return view('usuarios/excluir_usuario', ['usuario' => $usuario, 'readonly' => true]);
    }

    public function excluir_usuario($id) {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect("/usuarios");
    }

}

