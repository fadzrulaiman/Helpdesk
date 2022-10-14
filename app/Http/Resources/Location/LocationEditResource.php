<?php

namespace App\Http\Resources\Location;

use Illuminate\Http\Resources\Json\JsonResource;

class LocationEditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request $request
     * @return array
     * @throws Exception
     */
    public function toArray($request)
    {
        /** @var Location $location */
        $location = $this;
        return[
            'id'=> $location->id,
            'name'=>$location->name,
            /**'users' => $location, -> users()->count(),*/
            'created_at' => $location->created_at->toISOString()
        ];
    }
}
