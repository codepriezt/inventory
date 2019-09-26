<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;

class PageController extends Controller
{


    public function index()
    {
        return view('Admin.home.index');
    }




    public function addProduct()
    {
        $category = Category::all();

        if($category->count() == 0)
        {
            return redirect()->route('create.category')->with('info', 'Create a category to proceed');
        }
        return view('Admin.Product.new' , ['category' => $category]);
    }




    public function addCategory()
    {
        return view('Admin.Category.index');
    }


    public function product()
    {
        $product = Product::all();
        return view('Admin.Product.products' , ['product' => $product]);
    }


    public function singleProduct($id)
    {
            $product = Product::findorFail($id);
        return view('Admin.Product.single-product' , ['product' => $product]);
    }

    public function user()
    {
        $user = User::all(); 

        return view('Admin.user.users' , ['user'=>$user]);
    }


    public function singleUser($id)
    {
            $user = User::findorFail($id);
          return view('Admin.user.singleUser' , ['user' => $user]);
    }


    public function addUser()
    {
       
        return view('Admin.user.new' );
    }

    public function signIn()
    {
        return view('general .admin.signin');
    }

   

}
