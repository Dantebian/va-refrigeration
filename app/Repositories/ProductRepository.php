<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductRepository
{
    public static function save(Request $request, ?String $id = null) {

        $product = Product::updateOrCreate(
            [
                'id' => $id
            ],
            $request->all()
        );
        return $product;
    }
}
