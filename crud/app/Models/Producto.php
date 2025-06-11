<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
     use HasFactory;

    protected $table = 'producto';  // Si tu tabla está en minúsculas

    protected $primaryKey = 'Id_Producto';

    public $timestamps = false; // Si no usas created_at/updated_at

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Precio',
        'Cantidad',
        'fkCategoria',
    ];

    public function categoria()
{
    return $this->belongsTo(Categoria::class, 'fkCategoria');
}

}
