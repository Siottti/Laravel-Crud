<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create (Request $request)
    {
        $product = new Product;
        $product->Pname = $request->Pname;
        $product->description = $request->description;
        $product->price = $request->price; 

        $product->save();
        return response()->json([
            'status'=>200,
            'message'=>'Student Deleted Succesfully',
        ]);
       
    }

    public function displayData()
    {
        $product = Product::all();

        return view('display', ["data" => $product]);
    }

    

    public function update(Request $request)
    {
        $Product = Product::find($request->id);
        $Product->Pname = $request->Pname;
        $Product->description = $request->description;
        $Product->price = $request->price; 
        $Product->save();

        
        return response()->json([
            'status'=>200,
            'message'=>' Succesfully',
        ]);
    }



    public function delete(Request $request)
    {
        $Product = Product::find( $request->id);

        $Product->delete();
        
        return response()->json([
            'status'=>200,
            'message'=>'Student Deleted Succesfully',
        ]);
    }
}

