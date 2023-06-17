<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;

    public function filiere() {
        return $this->hasOne(Filiere::class, 'id', 'id_fil');
    }

    public function time() {
        return $this->hasOne(Time::class, 'id', 'id_time');
    }
}
