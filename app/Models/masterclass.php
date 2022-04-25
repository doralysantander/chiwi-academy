<?php

namespace App\Models;
use App\Models\register;
use App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterclass extends Model
{
    use HasFactory;

    public function register(){
        return $this->hasMany(Register::class)->select('user_id', 'masterclass_id')->where('user_id',auth()->user()->id);
        
    }

    public function user_masterclass(){
        return $this->belongsToMany(User::class, Register::class)->where('user_id',auth()->user()->id);
    }

    public function count_register(){
        return $this->hasMany(Register::class);
    }
}
