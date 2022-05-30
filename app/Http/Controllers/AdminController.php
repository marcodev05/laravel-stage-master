<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addProductView(){
        return view('admin.products.add');
    }

    public function editProductView($id)
    {     
        //$product = Product::findOrFail($id);
        return view('admin.products.edit');
    }
}
