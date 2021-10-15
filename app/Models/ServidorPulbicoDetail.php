<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServidorPulbicoDetail extends Model
{
    use HasFactory;
    protected $connection = "mysql2";
    protected $table = "s_usuario";
    protected $primaryKey = "id_Usuario";
    protected $guarded = ["id_Usuario", "created_at", "updated_at","delete_at"];

    public function dependencia(){
        return$this->belongsTo(Dependencia::class,"id_Dependencia","id_Dependencia")->withDefault(["Nombre" => "No identificado"]);

    }

    public function direccion(){
        return$this->belongsTo(Direccion::class)->withDefault(["Nombre" => "No identificado"]);
    }

    public function departamento(){
        return$this->hasOne(Departamento::class, "id_Departamento", "id_Departamento")->withDefault(["Nombre" => "No identificado"]);
    }
}
