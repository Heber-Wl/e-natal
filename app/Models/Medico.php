<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Medico extends Authenticatable
{
    protected $hidden = [
        'password',
        'remember_token',
    ];
    use HasFactory, Notifiable;

    protected $table = 'medico';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'crm',
        'password',
    ];

    public function resgatarPrimeirosDoisNomes(): string {
        $nomeArray = explode(' ', $this->nome);
        $primeirosDoisNomesArray = array_slice($nomeArray, 0, 2);
        return implode(' ', $primeirosDoisNomesArray);
    }
    public function setRememberToken($value)
    {
    }
    public function getRememberTokenName()
    {
        return null;
    }
}
