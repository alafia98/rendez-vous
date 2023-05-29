<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $table = 'filieres';
    protected $fillable = [
        'nom_fr',
        'nom_ar',
        'id_lieu' 
    ];

    public function lieu()
    {
        return $this->belongsTo(Lieu::class, 'id_lieu', 'id');
    }
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class, 'id_fil', 'id');
    }
    public function calendrier()
    {
        return $this->hasMany(Calendrier::class, 'id_fil', 'id');
    }
}
