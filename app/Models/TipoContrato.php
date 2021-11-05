<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    protected $table="tipo_contrato";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
