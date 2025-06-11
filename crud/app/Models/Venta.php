<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = [
        'fkCliente',
        'total',
    ];

    public $timestamps = false; // si tu tabla no tiene created_at y updated_at
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'fkCliente');
    }

}