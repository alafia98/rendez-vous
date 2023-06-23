<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class date extends Model
{
    use HasFactory;
    protected $table = 'dates';

    public function lieu()
    {
        return $this->belongsTo(Lieu::class, 'id_lieu');
    }

    public function times()
    {
        return $this->hasMany(Time::class, 'id_date');
    }
}
