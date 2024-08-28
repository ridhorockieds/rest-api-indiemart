<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        if ($categories) {
            return response()->json([
                'message' => 'Categories',
                'data' => $categories,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Categories not found!',
                'data' => '',
            ], 400);
        }
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'message' => $validation->errors(),
            ], 400);
        } else {
            $category = Category::create([
                'name' => $request->name,
            ]);

            if ($category) {
                return response()->json([
                    'message' => 'Category saved',
                ], 201);
            }
        }
    }

    public function update(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validation->fails()) {
            return response()->json([
                'message' => $validation->errors(),
            ], 400);
        }
        $category = Category::where('id', $request->input('id'))->update([
            'name' => $request->input('name'),
        ]);

        if ($category) {
            return response()->json([
                'message' => 'Update success',
            ], 200);
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'message' => 'Failed delete category!'
            ], 401);
        }

        $category->delete();
        return response()->noContent();
    }
}
