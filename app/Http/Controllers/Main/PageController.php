<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class PageController extends Controller
{
    public function index()
    {
        return view('Main.home.index');
    }




    public function addProduct()
    {
        $category = Category::all();

        if($category->count() == 0)
        {
            return redirect()->route('create.category')->with('info', 'Create a category to proceed');
        }
        return view('Main.Product.new' , ['category' => $category]);
    }




    public function addCategory()
    {
        return view('Main.Category.index');
    }


    public function product()
    {
        $product = Product::all();
        return view('Main.Product.products' , ['product' => $product]);
    }


    public function singleProduct($id)
    {
            $product = Product::findorFail($id);
        return view('Main.Product.single-product' , ['product' => $product]);
    }

}
