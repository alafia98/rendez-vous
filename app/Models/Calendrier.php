<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    use HasFactory;
    protected $table = 'calendrier';
    protected $fillable = [
        'date',
        'heure_debut',
        'heure_fin',
        'id_fil',

    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_fil', 'id');
    }
    public function rendezvous()
    {
        return $this->hasMany(Rendezvous::class, 'id_cal', 'id');
    }
    public function recu()
    {
        return $this->belongsTo(Recu::class, 'id_recu', 'id');
    }
}
