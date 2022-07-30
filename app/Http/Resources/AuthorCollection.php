<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AuthorCollection extends ResourceCollection
{
    public $collects = AuthorItemResource::class;

    public function toArray($request)
    {
        return [
            'code' => 200,
            'message' => 'All authors',
            'data' => $this->collection
        ];
    }
}
