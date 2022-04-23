<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;

    public function eventsUser(){
        return $this->belongsToMany(Masterclass::class);
    }

}
