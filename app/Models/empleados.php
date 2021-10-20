<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $fillable=['img','usuario', 'apellido','contrasena','correo'];
    use HasFactory;
}
