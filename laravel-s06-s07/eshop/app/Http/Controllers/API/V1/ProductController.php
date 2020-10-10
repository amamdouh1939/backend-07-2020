<?php

namespace App\Http\Controllers\API\V1;

use AElnemr\RestFullResponse\CoreJsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductRecource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use CoreJsonResponse;

    public function index()
    {
        $products = Product::query()
            ->with(['category'])
            ->paginate(15);

        $products = ProductRecource::collection($products);
        return $this->ok($products->resolve());
    }
}
