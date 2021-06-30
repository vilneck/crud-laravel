<?php

namespace App\Models\Agenda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{
    use SoftDeletes;

    protected $table='contatos';

    protected $appends =['data_criacao'];

    protected $fillable=[
        'nome',
        'sobrenome',
        'telefone_celular',
        'telefone_fixo',
        'email',
        'observacoes'
    ];

    public function getDataCriacaoAttribute()
    {
        return date('d/m/Y H:i', strtotime($this->attributes['created_at']));
    }

}
