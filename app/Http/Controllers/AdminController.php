<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\products;
use App\Models\User;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function login()
    {
        return view('admin1.login');
    }


    public function validation (Request $request,orders $orders,products $products,User $User)
    {
        $User=User::get();
        $Usercount=User::count();
        $allproducts = products::count();
        $allorders = orders::count();
        $allcattles = products::where('type','Cattle')->count();
        $name = $request->input('name');
        $password = $request->input('password');

        if($name=='reset' && $password=='reset' )
        {
            return view("admin1.homepage",compact('User','allproducts','allorders','allcattles','Usercount'));
        }

        else
        {
            return view("admin1.login");
        }


    }



    public function adminmainpage(orders $orders,products $products,User $User)
    {
        $User=User::get();
        $Usercount=User::count();
        $allproducts = products::count();
        $allorders = orders::count();
        $allcattles = products::where('type','Cattle')->count();
        return view('admin1.homepage',compact('User','allproducts','allorders','allcattles','Usercount'));
    }


    public function viewuserinfo(orders $orders,products $products,User $User)
    {
        $User=User::get();
        $Usercount=User::count();
        $allproducts = products::count();
        $allorders = orders::count();
        $allcattles = products::where('type','Cattle')->count();
        return view('admin1.adminuserinfo',compact('User','allproducts','allorders','allcattles','Usercount'));
    }


    public function welcome()
    {
        return view('welcome');
    }




    public function productlist()
    {
        return view('admin1.productlist');
    }


    public function create()
    {
        return view ('products.create');
    }


    public function store(Request $request)
    {

    }


    public function show(admin $admin)
    {

    }


    public function edit(admin $admin)
    {
        //
    }


    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
