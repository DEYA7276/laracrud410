<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::get(); //obtener todos los datos de la tabla
        return view('products_index', compact('products'));
        //echo "Index productos";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //$brands=Brand::get();
        //dd($brands); //verificar que los datos se esten extrayendo
        $brands=Brand::pluck('id','brand'); //ob¿tener datos especificos
        //dd($brands); //verificar datos que se extraen
        return view('products_create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // echo "Registro realizado";
       // dd($request);
       //dd($request->all());
       Product::create($request->all());
       return to_route('products.index') -> with('status', 'Producto registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
        return view('products_show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands=Brand::pluck('id','brand'); //ob¿tener datos especificos
        return view('products_edit', compact('brands','product'));
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $product->update($request->all()); // actualizamos los datos en la base de datos
        return to_route('products.index') -> with('status', 'Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        echo "Destroy productos";
    }
}
