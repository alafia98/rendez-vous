<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;
    
    public function filiere()
    {
        return $this->belongsTo(Lieu::class, 'id_fil', 'id');
    }
    public function date()
    {
        return $this->hasMany(Date::class, 'id_lieu', 'id');
    }
}
