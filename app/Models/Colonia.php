<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    protected $table='colonia';
    protected $primarykey='id_colonia';
    public $timestamps=false;
    protected $fillable=['id_sancion','id_permiso','fecha_sancion','multa','motivo'];
}
