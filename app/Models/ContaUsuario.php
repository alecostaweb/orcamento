<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaUsuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_conta',
        'id_usuario',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function conta(){
        return $this->belongsTo(Conta::class,'id_conta');
    }

    public function usuario(){
        return $this->belongsTo(User::class,'id_usuario');
    }
    /*
    public function tipoconta(){
        return $this->belongsTo(TipoConta::class);
    }
    */
}
