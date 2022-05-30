<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{

    protected $fillable = [
        'order_quantity', 
        'ordered'
    ];

    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
