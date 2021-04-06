<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'role_id',
        'estado',
    ];

    public function role () {
    	return $this->belongsTo(Roles::class);
    }
}

