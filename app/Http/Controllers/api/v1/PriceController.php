<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::paginate(10);

        if ($prices) {
            return response()->json([
                'data' => $prices
            ], 200);
        }
    }

    public function show($id)
    {
        $prices = Price::where('product_id', $id)->paginate(10);

        if ($prices) {
            return response()->json([
                'data' => $prices,
            ], 200);
        }
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'product_id' => 'required|string',
            'price' => 'required|numeric'
        ]);

        if ($validation->fails()) {
            return response()->json([$validation->errors()], 401);
        } else {
            $price = Price::create([
                'product_id' => $request->product_id,
                'price' => $request->price,
            ]);

            if ($price) {
                return response()->json(['message' => 'Price Updated'], 200);
            }
        }
    }
}
