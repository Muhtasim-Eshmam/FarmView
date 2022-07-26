<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    public function index()
    {
//        $products = products::get();
        return view('admin1.productlist');
    }

    public function create()
    {
        return view ('products.create');
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'status' => ['required'],
            'discount' => ['nullable'],
            'stock' => ['required'],
            'price' => ['required'],
            'image' => ['nullable'],

        ]);
        if ($request->hasFile('image'))
        {
            $path = $request->file('image')->store('products', 'public');
            $valid['image'] = $path;
        }

        $products = products::create($valid);

        return redirect('/productlist');
    }


    public function show(products $products)
    {
        $products=products::get();

        return view('products.productlist',compact('products'));

    }


    public function cattles(products $products)
    {
        $products=products::get();

        return view('Customer.customercattlelist',compact('products'));

    }



    public function edit(products $products,$id)
    {
        $products = products::find($id);
        return view('products.edit', compact('products'));
    }


    public function update(Request $request, products $products)
    {
        $valid = $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'status' => ['required'],
            'discount' => ['nullable'],
            'stock' => ['required'],
            'price' => ['required'],

        ]);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($products->getRawOriginal('image'))) {
                Storage::disk('public')->delete($products->getRawOriginal('image'));
            }

            $path = $request->file('image')->store('products', 'public');
            $valid['image'] = $path;
        }


        $products->update($valid);

        return redirect('/productlist');
    }


    public function destroy(products $products,$id)
    {
        $products = products::find($id);
        $products->delete();
        return redirect('/productlist');
    }

    public function search(Request $request,products $products)
    {

        $products = products::orderBy('name','ASC')
            ->where('name', 'LIKE', "%{$request->string}%" )->get();
        return view('products.productsearch', compact('products'));
    }



    public function searchmenu(Request $request,products $products)
    {
        $products=products::get();

        return view('products.search',compact('products'));
    }









}
