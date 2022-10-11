<?php

namespace App\Http\Controllers\Api\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Admin\Location\UpdateRequest;
use App\Http\Resource\Location\LocationResouce;
use App\Models\Location;
use Illuminate\Http\JsonResponse;


class LocationController extends Controller
{
    public function __construct()
    {
        $this->middelware('auth:sanctum');
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(LocationResouce::collection(Location::orderBy('id')->get()));
    }

    /**
     * Display the specified resource.
     *
     * @param Location $location
     * @return JsonResponse
     */
    public function show(Location $location): JsonResponse
    {
        return response()->json(new LocationResouce($location));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Location $location
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Location $location): JsonResponse
    {
        $request->validated();
        $location->name= $request->get('name');
        if ($location>sace()){
            return response()->json(['message' => 'Data updated correctly', 'priority' =>new LocationResouce($location)]);
        }
        return response()->json(['message' => __('An error occurred while saving data')], 500);
    }

}
