<?php

namespace App\Models;
use App\Models\masterclass;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
/*
    public function masterclass(){
       
        //belongsToMany('App\FileType', 'middle_table', 'local_key', 'foreign_key');
        return $this->belongsToMany(Masterclass::class, Register::class,'id','masterclass_id');
    }*/

}
