<?php

namespace App\Models;

use App\Models\OrderLine;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function orderlines(){
        
        return $this->hasMany(OrderLine::class);
    }
}
