<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table='livros';

    protected $fillable = ['titulo', 'author_id', 'editora_id'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function autor() {
        return $this->belongsTo('App\Author', 'author_id');
    }

    public function editora() {
        return $this->belongsTo('App\Editora', 'editora_id');
    }
}
