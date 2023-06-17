<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    public function date()
    {
        return $this->belongsTo(Time::class, 'id_date', 'id');
    }
}
