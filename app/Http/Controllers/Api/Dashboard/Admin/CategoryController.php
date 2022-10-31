<?php

namespace App\Http\Controllers\Api\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Admin\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
        /**
     * Display a listing of the resource.
     * 
     * @return JsonResponse
     */

    public function index(): JsonResponse
    {
        return response()->json(CategoryResource::collection(Category::all()));
    }

          /**
     * Display the specified resource.
     *
     * @param  Category  $category
     * @return JsonResponse
     */
    public function show(Category $category): JsonResponse
    {
        return response()->json(new CategoryResource($category));
    }

            /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Status  $status
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Category $category): JsonResponse
    {
        $request->validated();
        $category->name = $request->get('name');
        if ($category->save()) {
            return response()->json(['message' => 'Data updated correctly', 'category' => new CategoryResource($category)]);
        }
        return response()->json(['message' => __('An error occurred while saving data')], 500);
    }
}
