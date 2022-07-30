<?php

namespace App\Http\Resources;

use App\Models\Group;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupItemResource extends JsonResource
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
            'facultet_id' => $this->facultet->id,
            'facultet_name' => $this->facultet->name,
            'students' => StudentResource::collection($this->students)
        ];
    }
}
