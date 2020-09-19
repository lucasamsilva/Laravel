<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    private $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->middleware('guest')->except('logout');
        $this->repository = $user;
    }

    public function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = $this->repository->where('email', $email)->first();

        if ($user) {
            if (Auth::check() || ($user && Hash::check($password, $user->password))) {
                if ($user->is_active == 1) {
                    Auth::login($user);
                    return redirect()->route('home');
                } else {
                    return redirect()->route('login')->with('fail', 'Verifique o email para ativar a sua conta!');
                }
            } else {
                return redirect()->route('login')->with('fail', 'Seu e-mail ou senha informados são inválidos');
            }
        } else {
            return redirect()->route('login')->with('fail', 'Seu e-mail ou senha informados são inválidos');
        }

        return redirect()->route('login')->with('fail', 'Falha no Login - Tente novamente');
    }

    public function telalogin()
    {
        return view('auth.login');
    }
}
