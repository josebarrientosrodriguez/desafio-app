<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cama extends Model
{
    use HasFactory;
    public function usuarioCrea(){
        return $this->belongsTo(User::class, 'usuario_crea');
    }
}
