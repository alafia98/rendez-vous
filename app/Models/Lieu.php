<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;
    public function filiere()
    {
        return $this->hasMany(Filiere::class, 'id_lieu', 'id');
    }
}
