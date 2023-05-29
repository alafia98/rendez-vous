<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;
    protected $table = 'rendezvous';
    protected $fillable = [
        'code_rdv',
        'status',
        'id_cal',
        'id_etd'

    ];

    public function calendrier()
    {
        return $this->belongsTo(Calendrier::class, 'id_cal', 'id');
    }
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etd', 'id');
    }
    public function recu()
    {
        return $this->belongsTo(Recus::class, 'id_rdv', 'id');
    }
}
