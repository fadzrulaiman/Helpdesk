<?php

namespace App\Http\Resources\Location;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
                /** @var Location $location */
                $location = $this;
                return [
                    'id' => $location->id,
                    'name' => $location->name,
                    'created_at' => $location->created_at->toISOString()
                ];
    }
}
