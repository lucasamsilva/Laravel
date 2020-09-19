<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'sexo', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmail($user)
    {
        $activate_code = bcrypt(Str::random(15));
        $user->remember_token = $activate_code;
        $user->save();
        $viewData['full_name'] = $user->name;
        $email_code = $user->remember_token;
        $viewData['link'] = asset('verify_account?token=').$email_code;
        Mail::send('auth.email_verification', $viewData, function($m) use ($user){
            $m->from(env('MAIL_FROM_ADDRESS'), 'Ativação de usuário');
            $m->to($user->email, $user->name)->subject('E-mail de confirmação');
        });
    }

    public function requestPasswordReset($email) {
        self::generatePasswordResetToken($email);
        return self::sendPasswordResetEmail($email);
    }

    public static function generatePasswordResetToken($email) {
        if(User::where('email', $email)->first()) {
            DB::table('password_resets')->where('email', $email)->delete;
            DB::table('password_resets')->insert([
                'email'=>$email,
                'token'=>bcrypt(Str::random(15)),
                'created_at'=>Carbon::now()
            ]);
        }
    }

    public static function sendPasswordResetEmail($email){
        $token = DB::table('password_resets')->where('email', $email)->first();

        if($token) {
            $usuario = DB::table('users')->where('email', $email)->select('name', 'email')->first();
            $viewData['full_name'] = $usuario->name;
            $email_code = $token->token;
            $viewData['link'] = asset('reset_password?token=').$email_code;
            Mail::send('auth.email_verification', $viewData, function($m) use ($usuario){
                $m->from(env('MAIL_FROM_ADDRESS'), 'Ativação de usuário');
                $m->to($usuario->email, $usuario->name)->subject('Recuperar senha');
            });
            return true;
        }
        return false;
    }

}
