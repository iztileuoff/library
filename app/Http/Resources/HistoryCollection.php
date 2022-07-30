<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HistoryCollection extends ResourceCollection
{
    public $collects = HistoryItemResource::class;

    public function toArray($request)
    {
        return [
            'code' => 200,
            'message' => 'All histories',
            'data' => $this->collection
        ];
    }
}
