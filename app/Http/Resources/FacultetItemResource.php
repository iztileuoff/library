<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FacultetItemResource extends JsonResource
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
            'name' => $this->name,
            'groups' => GroupResource::collection($this->groups),
            'students' => StudentResource::collection($this->students)
        ];
    }
}
