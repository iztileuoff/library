<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GroupCollection extends ResourceCollection
{
    public $collects = GroupItemResource::class;

    public function toArray($request)
    {
        return [
            'code' => 200,
            'message' => 'All groups',
            'data' => $this->collection
        ];
    }
}
