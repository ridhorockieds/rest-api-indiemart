<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(10);
        if ($products) {
            return ProductResource::collection($products);
        } else {
            return response()->json([
                'message' => 'Product Not Found!',
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required|numeric',
            'image' => 'required',
            'link' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'message' => $validation->errors(),
            ], 401);
        } else {
            $product = Product::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'image' => $request->image,
                'link' => $request->link,
            ]);
            if ($product) {
                return response()->json([
                    'message' => 'Product added successfully',
                ], 201);
            }
        }
    }

    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return new ProductResource($product);
        } else {
            return response()->json([
                'message' => 'Product Not Found!',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => 'Product Not Found!'
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required|numeric',
            'image' => 'required',
            'link' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'message' => $validation->errors()
            ], 401);
        } else {
            $product->update($request->all());

            return response()->json(['message' => 'Update Product Successfully!'], 200);
        }
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => 'Product Not Found!'
            ], 404);
        }

        $product->delete();
        return response()->noContent();
    }
}
