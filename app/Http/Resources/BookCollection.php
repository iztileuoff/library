<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookCollection extends ResourceCollection
{
    public $collects = BookItemResource::class;

    public function toArray($request)
    {
        return [
            'code' => 200,
            'message' => 'All books',
            'data' => $this->collection
        ];
    }
}
