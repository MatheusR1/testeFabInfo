<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = "tipo_documento";
    protected $fillable = ['nome_tipo'];


    public function documentos()
    {
        return $this->hasMany(\App\Documentos::class);
    }
}
