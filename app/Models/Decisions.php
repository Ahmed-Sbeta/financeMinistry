<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decisions extends Model
{
    use HasFactory;
    public function issuer1(){
        return $this->hasOne(Ministrie::class,'id', 'issuer');
    }

    public function receiver1(){
        return $this->hasOne(Ministrie::class,'id', 'receiver');
    }
}
