<?php

namespace App\Models;
use App\Models\register;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterclass extends Model
{
    use HasFactory;

    public function register(){
        return $this->hasMany(Register::class)->select('user_id', 'masterclass_id')->where('user_id',auth()->user()->id);
        
    }
}
