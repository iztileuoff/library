<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentCollection extends ResourceCollection
{
    public $collects = StudentItemResource::class;

    public function toArray($request)
    {
        return [
            'code' => 200,
            'message' => 'All students',
            'data' => $this->collection
        ];
    }
}
