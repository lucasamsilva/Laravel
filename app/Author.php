<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table='authors';

    protected $fillable = ['nome', 'pseudonimo', 'data_nascimento','sexo','rg','cpf'
    ,'endereco','cep','cidade','bairro','email','telefone','celular'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function livros() {
        return $this->hasMany('App\Livro', 'author_id');
    }

}
