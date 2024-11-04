<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::with(['type', 'brand'])->paginate('15');
        
    }
    public function indexWithView() {
        // Retrieve uncompleted and completed tasks from the database and pass them to the view
        return response()->view('products.index', [
            'products' => Product::with('type', 'brand')->get(),
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = ProductRepository::save($request);

        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product = ProductRepository::save($request, $product->id);

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(['success' =>'El producto fue eliminado con exito']);
    }
}
