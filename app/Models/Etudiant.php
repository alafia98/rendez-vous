<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Filiere;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'etudiants';
    protected $fillable = [
        'cin',
        'cne',
        'nom_fr',
        'prenom_fr',
        'nom_ar',
        'prenom_ar',
        'phone',
        'email',
        'adresse',
        'id_fil'
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_fil', 'id');
    }
}
