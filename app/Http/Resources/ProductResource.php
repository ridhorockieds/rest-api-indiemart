<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        $latestPrice = $this->price->sortByDesc('created_at')->first();
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => new CategoryResource($this->category),
            'image' => $this->image,
            'link' => $this->link,
            'price' => $latestPrice ? new PriceResource($latestPrice) : null,
        ];
    }
}
