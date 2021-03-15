<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Indica que a tabela usada vai ser 'posts'
    protected $table = 'posts';

    //Indica quais campos podem ser preenchidos no formulário
    protected $fillable = ['title', 'content'];
}
