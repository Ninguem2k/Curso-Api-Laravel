<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'slug' => $this->slug,
            'description' => $this->description,
        ];
        // return parent::toArray($request);
    }
    public function with($request)
    {
        return [
            "extra-single-date" => "mensagem a ser passada",
        ];
    }
}
