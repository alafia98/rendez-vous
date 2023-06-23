<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    use HasFactory;
    
    public function lieus()
    {
        return $this->hasMany(Lieu::class, 'id_fil');
    }
}
