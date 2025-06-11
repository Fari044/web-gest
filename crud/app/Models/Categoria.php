<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'Categoria';
    protected $primaryKey = 'Id_Categoria';
    public $timestamps = false;

    protected $fillable = ['Nombre', 'Descripcion'];
}
