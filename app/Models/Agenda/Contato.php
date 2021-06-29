<?php

namespace App\Models\Agenda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{
    use SoftDeletes;

    protected $table='contatos';

    protected $fillable=[
        'nome_contato',
        'sobrenome',
        'telefone_celular',
        'telefone_fixo',
        'email',
        'observacoes'
    ];

}
