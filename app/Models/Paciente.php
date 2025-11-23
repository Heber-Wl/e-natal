<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Paciente extends Model
{
    protected $hidden = [
        'password',
        'remember_token',
    ];
    use HasFactory, Notifiable;

    protected $table = 'paciente';

    protected $fillable = [
        'nome',
        'cartao_sus',
        'peso',
        'altura',
        'data_nascimento',
        'data_ultima_mestruacao',
        'primeira_gestacao',
        'gestacao_multipla',
        'reproducao_assistida',
        'perda_gestacional',
        'ambiente_estressante',
        'gestacao_planejada',
        'aceita_gravidez',
        'historico_psiquiatrico',
        'pre_eclampsia',
        'diabetes_mellitus',
        'hipertensao',
        'doenca_tiroide',
        'medico_id'
    ];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }
}
