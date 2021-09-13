<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class textos extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'conteudo',
        'autor',
    ];
}
