<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\orders;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mainpage(products $products)
    {

        $products=products::get();
        return view('Customer.userpanel',compact('products'));
    }



    public function products(products $products)
    {
        $products=products::get();

        return view('Customer.customerproductlist',compact('products'));
    }

}
