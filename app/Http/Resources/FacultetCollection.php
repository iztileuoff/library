<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FacultetCollection extends ResourceCollection
{

    public $collects = FacultetItemResource::class;
    
    public function toArray($request)
    {
        return [
            'code' => 200,
            'message' => 'All facultets',
            'data' => $this->collection
        ];
    }
}
