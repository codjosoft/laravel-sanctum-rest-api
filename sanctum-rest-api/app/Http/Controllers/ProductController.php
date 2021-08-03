<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $Product= new Product();
        $Product->slug = $request->slug;
        $Product->name = $request->name;
        $Product->price = $request->price;
        $Product->description = $request->description;

        return $Product->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request->validation
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'slug' => 'required',
        ]);
        return Product::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //update product all fields
        $Product = Product::findOrFail($id);
        $Product->update($request->all());
        return $Product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete product
        return Product::destroy($id);
        
    }
        /** 
        * search the specified resource from storage.
        *
        * @param  string  $name
        * @return \Illuminate\Http\Response
        */
     public function search($name)
       {
           //search product
           return Product::where('name', 'like', '%'.$name.'%')->get()->first();
       }
}
