<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rendezvous extends Model
{
    use HasFactory;
    
    protected $table = 'rendezvouses';

    public function time()
    {
        return $this->belongsTo(Time::class, 'id_time');
    }
}
