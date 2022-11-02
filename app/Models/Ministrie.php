<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministrie extends Model
{
    use HasFactory;

    public function parent(){
        return $this->hasOne(Ministrie::class, 'id', 'parent_id');
    }

    public function payeds(){
        return $this->hasMany(MonthllyPayed::class, 'ministry_id', 'id');
    }

    public function chilldren(){
        return $this->hasMany(Ministrie::class, 'parent_id', 'id');
    }
}
