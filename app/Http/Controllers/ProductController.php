<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('/product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $vaidatedData = $request->validate([
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);

        $product = new Product();

        $product->name = $vaidatedData['name'];
        $product->price = $vaidatedData['price'];

        $product->save();

        return redirect('/product')->with('message', 'Insert data success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect('/product');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $vaidatedData = $request->validate([
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);

        $product->name = $vaidatedData['name'];
        $product->price = $vaidatedData['price'];

        $product->save();

        return redirect('/product')->with('message', 'Update data success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->forceDelete();

        return redirect('/product')->with('message', 'Delete data success!');
    }
}
