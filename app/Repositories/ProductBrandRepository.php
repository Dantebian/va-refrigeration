<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ProductBrand;

class ProductBrandRepository
{
    public static function save(Request $request, ?String $id = null) {

        $productBrand = ProductBrand::updateOrCreate(
            [
                'id' => $id
            ],
            $request->all()
        );
        return $productBrand;
    }
}
