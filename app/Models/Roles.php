<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    const ADMINISTRADOR=1;
    const AUDITOR=2;
    const AUXILIAR=3;


}
