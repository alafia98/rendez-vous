<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_fil');
    }
}
