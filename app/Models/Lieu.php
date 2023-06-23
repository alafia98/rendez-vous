<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lieu extends Model
{
    use HasFactory;
    
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_fil');
    }

    public function dates()
    {
        return $this->hasMany(Date::class, 'id_lieu');
    }
}
