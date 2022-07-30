<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{

    public function toArray($request)
    {
        return [
            'code' => 200,
            'message' => 'All categories',
            'data' => $this->collection
        ];
    }
}
