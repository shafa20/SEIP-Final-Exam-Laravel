<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\Product;
use Illuminate\Support\Str;
use Image;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('id','asc')->get();
        return view('backend.pages.products.productmanage',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.products.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_category = $request->category;
        $product->product_size = $request->size;
        $product->product_costprice = $request->costPrice;
        $product->product_saleprice = $request->salePrice;
        $product->product_quantity = $request->quantity;

            $image=$request->file('product_image');
            $imageCustomName=rand().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/subcategoryimages/'.$imageCustomName);
            Image::make($image)->save($location);
            $product->product_image=$imageCustomName;

        $product->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        
       return view('backend.pages.products.edit_product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->product_name = $request->name;
        $product->product_description = $request->description;
        $product->product_category = $request->category;
        $product->product_size = $request->size;
        $product->product_costprice = $request->costPrice;
        $product->product_saleprice = $request->salePrice;
        $product->product_quantity = $request->quantity;

            $image=$request->file('product_image');
            $imageCustomName=rand().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/subcategoryimages/'.$imageCustomName);
            Image::make($image)->save($location);
            $product->product_image=$imageCustomName;

        if(empty($request->product_image)){
            $product->update();
            return redirect()->route('dashboard');
        }else{
            if(File::exists('backend/subcategoryimages/'.$request->product_image)){
                File::delete('backend/subcategoryimages/'.$request->product_image);
            }
                $image=$request->file('product_image');
                $imageCustomName=rand().'.'.$image->getClientOriginalExtension();
                $location=public_path('backend/subcategoryimages/'.$imageCustomName);
                Image::make($image)->save($location);
                $product->product_image=$imageCustomName;
    
            $product->update();
            return redirect()->route('dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);

        if(File::exists('backend/subcategoryimages/'.$product->product_image)){
            File::delete('backend/subcategoryimages/'.$product->product_image);
        }
         $product->delete();
        return redirect()->route('productmanage');
    }
}
