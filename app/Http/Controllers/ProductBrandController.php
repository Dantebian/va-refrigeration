<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductBrandRequest;
use App\Http\Requests\UpdateProductBrandRequest;
use App\Models\ProductBrand;
use App\Repositories\ProductBrandRepository;

class ProductBrandController extends Controller
{
    public function index()
    {
        return ProductBrand::with(['products'])->paginate('15');
    }

    public function store(StoreProductBrandRequest $request)
    {
        $productBrand = ProductBrandRepository::save($request);

        return $productBrand;
    }

    public function update(UpdateProductBrandRequest $request, ProductBrand $productBrand)
    {
        $productBrand = ProductBrandRepository::save($request, $productBrand->id);

        return $productBrand;
    }

    public function destroy(ProductBrand $productBrand)
    {
        $productBrand->delete();

        return response()->json(['success' =>'El producto fue eliminado con exito']);
    }
}
