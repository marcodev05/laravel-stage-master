<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{



    public function index()
    {   
        $products = Product::all();
        return view('user.home', compact('products'));
    }


    public function homeview()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0') //  simple user
            {
                $products = Product::all();
                return view('user.home', compact('products'));
            }
            elseif(Auth::user()->usertype=='1')
            {
                return view('admin.dashboard');
            }
        }
        else
        {
            return redirect()->back();
        }


    }
}
