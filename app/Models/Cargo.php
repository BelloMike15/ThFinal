<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'salario_minimo'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
