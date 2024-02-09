<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
// use App\Http\Controllers\Excel;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function dashboard(){
        return view('products.dashboard',['products' => Product::get()]);
        //to fetch the data through html code(foreach)
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(){
        return view('products.create');
    }
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        // Upload images
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        // Create a new product
        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        // Save the product to the database
        $product->save();

        // Redirect to the dashboard page
        return redirect()->route('dashboard')->withSuccess('Product Created Successfully!!');
    }
    
    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('products.edit',['product' => $product]);   //passing data in view
    }

    public function update(Request $request, $id){
        //validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $product = Product::where('id',$id)->first();
        //upload images
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('dashboard')->withSuccess('Product Updated Successfully!!');
    }
    public function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return redirect()->route('dashboard')->withSuccess('Product Deleted Successfully!!');
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('products.show', ['product' => $product]);
    }
}
