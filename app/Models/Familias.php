<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familias extends Model
{
    use HasFactory;
    protected $fillable = ['quant_membros', 'conjuje', 'conjuje_profissao', 'conjuje_trabalhando_atualmente','conjuje_ocupacao','quant_criancas', 'quant_pessoas_cuidados_especiais'];
}
