<?php

namespace App\Http\Resources;

use App\Models\Facultet;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentItemResource extends JsonResource
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
            'phone' => $this->phone,
            'group_id' => $this->group->id,
            'group_name' => $this->group->name,
            'facultet_id' => $this->group->facultet_id,
            'facultet_name' => Facultet::where('id', $this->group->facultet_id)->get()[0]['name']
        ];
    }
}
