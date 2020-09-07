<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $table='editoras';

    protected $fillable = ['nome'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function livros() {
        return $this->hasMany('App\Livro', 'editora_id');
    }
}
