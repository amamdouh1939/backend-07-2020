<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\CategoryRequest;
use App\Http\Resources\CategoryRecource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryRecource::collection(Category::query()->paginate(15));
        $categories = json_decode($categories->toResponse(app('request'))->getContent(), true);
        unset($categories['meta']['links']);
        return response()->json([
            'status' => 200,
            'data' => $categories['data'],
            'mate' => $categories['meta'],
        ]);
    }

    public function show(Category $category)
    {
        $category = new CategoryRecource($category);

        return response()->json([
            'status' => 200,
            'date' => $category
        ]);
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'name' => [
                'en' => $request->input('name_en'),
                'ar' => $request->input('name_ar'),
            ]
        ]);
        return response()->json(new CategoryRecource($category), 201);
    }
}
