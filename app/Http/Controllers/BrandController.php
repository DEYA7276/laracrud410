<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brands = Brand::get(); //obtener todos los datos de la tabla
        return view('brand_index', compact('brands'));
        //echo "Index productos";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $brands=Brand::pluck('brand','description'); //ob¿tener datos especificos
        //dd($brands); //verificar datos que se extraen
        return view('brand_create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Brand::create($request->all());
        return to_route('brands.index') -> with('status', 'Marca registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
