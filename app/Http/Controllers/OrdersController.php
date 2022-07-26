<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\products;
use App\Models\orders;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function index()
    {
        //
    }


    public function create(products $products,$id)
    {
//        $cattle=cattle::find($id);
        $products = products::find($id);

        return view('order.createorder',compact('products'));

    }

    public function adminview(orders $orders)
    {
        $orders=orders::get();

        return view('order.adminview',compact('orders'));
    }

    public function userview(orders $orders)
    {
        $orders=orders::get();

        return view('order.myorders',compact('orders'));
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'p_name' => ['required'],
            'name' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
            'contact' => ['required'],
            'quantity' => ['required'],
            'details' => ['required'],
            'price' => ['required'],
            'discount' => ['nullable'],

        ]);

        $orders = orders::create($valid);

        return redirect('/userview');
    }



    public function destroy(orders $orders,$id)
    {
        $orders = orders::find($id);
        $orders->delete();
        return redirect('/adminview');
    }




}
