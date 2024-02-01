<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = Store::findOrFail(2);
        $products = $store->product()->get();
        return dd($products); 
        return view('Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::all();
        //return dd($stores);
        return view('Product.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
       $product = new Product();
       $product->title = $request->title;
       $product->description = $request->description;
       $product->price = $request->price;
       $product->status = $request->status;
       $product->store_id = (int)$request->store_id;
       $product->save();
      
       Session::flash('message', "A Product was successfully created");
         return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('Product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('Product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $product = Product::findOrFail($request->product_id);
        $product->title = $request->product_title;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->status = $request->product_status;
        $product->save();
        Session::flash('message', "A Product was successfully updated");
         return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Are You sure you want to delete this Product?";
    }
}
