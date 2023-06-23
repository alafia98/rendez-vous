<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    use HasFactory;

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'id_fil');
    }

    public function lieu()
    {
        return $this->belongsTo(Lieu::class, 'id_lieu');
    }

    public function date()
    {
        return $this->belongsTo(Date::class, 'id_date');
    }

    public function time()
    {
        return $this->belongsTo(Time::class, 'id_time');
    }
}
