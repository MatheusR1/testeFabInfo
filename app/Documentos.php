<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $fillable = ['titulo', 'nome_arquivo','tipo_id'];

    public function tipoDocumento()
    {
        return $this->belongsTo(\App\TipoDocumento::class,'tipo_id');
    }
}
