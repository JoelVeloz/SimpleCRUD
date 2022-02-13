<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return Inertia::render('Product/Mostrar', compact('products'));
    }

    public function create()
    {
        return Inertia::render('Product/FormCrear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        Product::create($request->all());
        return Redirect::route('products.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return Inertia::render('Product/FormEditar', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return Redirect::route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('products.index');
    }
}
