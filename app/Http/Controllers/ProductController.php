<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class ProductController extends Controller
{
    
    public function addCategory(Request $request)
    {
            $this->validate($request ,[
                    'name' => 'required',
            ]);

            $category = Category::create([
                    'name'=>$request->name
            ]);

            if(!$category)
            {
                return back()->with('error' , 'unable to process your request, try again later');
            }

            return back()->with('success' , 'Category succesffuly created');

    }


    public function createProduct(Request $request)
    {
        

        $this->validate($request , [
            'title'=>'required',
            'category_id'=>'required',
            'unit'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        $product = Product::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'unit' => $request->unit,
            'description' => $request->description,
            'price' => $request->price,

        ]);

        if(!$product)
        {
            return back()->with('error' , 'unable to complete process, please try again');
        }

        return back()->with('success' , 'Product  sucessfully created');
    }




    public function editProduct(Request $request , $productId)
    {   

       
        $product = Product::find($request->productId); 

        $this->validate($request , [
            'title'=>'required',
            'unit'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

       $edit = $product->update([
            'title' => $request->title,
            'unit' => $request->unit,
            'description' => $request->description,
            'price' => $request->price,
        ]);


        if(!$edit)
        {
            return back()->with('error' , 'unable to complete process, please try again');
        }

        return back()->with('success' , 'Product  sucessfully Updated');
    }



    public function updateStatus(Request $request)
    {
        dd($request);
        $this->validate($request , [
            'id'=>'required',
            'status' =>'required',
        ]);
        $status = Product::findorfail($request->id);
            
        $status->update([
            'status'=>$request->status == 'online' ? 'offline' : 'online',
        ]);
        if($status){
            return back()->with('success' , 'product successfully activated');
        }
        return back()->with('error' , 'unable to complete process');
    }


    public function deleteProduct($productId)
    {
        $product = Product::where('id', $productId)->first();

        if (!$product) {
            return back()->with('error', "you post does not exist");
        }

        $product->delete();

        return back()->with('info', "product deleted");
    }

    
}
