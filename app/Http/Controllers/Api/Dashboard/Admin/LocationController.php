<?php

namespace App\Http\Controllers\Api\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Admin\Location\UpdateRequest;
use App\Http\Resources\Location\LocationResource;
use App\Models\Location;
use Illuminate\Http\JsonResponse;


class LocationController extends Controller
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
        return response()->json(LocationResource::collection(Location::all()));
    }
    /**
     * Display the specified resource.
     *
     * @param  Location $location
     * @return JsonResponse
     */
    public function show(Location $location): JsonResponse
    {
        return response()->json(new LocationResource($location));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest $request
     * @param  Location $location
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Location $location): JsonResponse
    {
        $request->validated();
        $location->name=$request->get('name');
        If ($location->save()){
            return response()->json(['message' => 'Data updated correctly', 'location' => new LocationResource($location)]);
        }
        return response()->json(['message' => __('An error occurred while saving data')], 500);
    }

}
