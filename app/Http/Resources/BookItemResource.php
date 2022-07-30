<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookItemResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'count' => $this->count,
            'category_id' => $this->category_id,
            'category_name' => $this->category->name,
            'author_id' => $this->author_id,
            'author_name' => $this->author->name,
        ];
    }
}
