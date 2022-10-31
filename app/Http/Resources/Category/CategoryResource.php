<?php

namespace App\Http\Resources\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {   
          /** @var Category $category */
          $category = $this;
          return [
              'id' => $category->id,
              'name' => $category->name,
              'created_at' => $category->created_at->toISOString()
          ];
    }
}
