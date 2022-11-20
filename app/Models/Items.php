<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    public function payeds(){
        return $this->hasMany(MonthllyPayed::class, 'item_id', 'id');
    }

}
