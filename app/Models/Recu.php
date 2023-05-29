<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recu extends Model
{
    use HasFactory;
    protected $table = 'recus';
    protected $fillable = [
        'id_rdv'
    ];

    public function rendezvous()
    {
        return $this->belongsTo(Rendezvous::class, 'id_rdv', 'id');
    }
}
