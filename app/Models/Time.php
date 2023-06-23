<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    use HasFactory;
    
    protected $table = 'times';

    public function date()
    {
        return $this->belongsTo(Date::class, 'id_date');
    }

    public function rendezvous()
    {
        return $this->hasOne(Rendezvous::class, 'id_time');
    }
}
