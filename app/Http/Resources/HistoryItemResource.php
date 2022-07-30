<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HistoryItemResource extends JsonResource
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
            'student_id' => $this->student_id,
            'student_name' => $this->student->name,
            'student_phone' => $this->student->phone,
            'book_id' => $this->book_id,
            'book_title' => $this->book->title,
            'taken_day' => $this->taken_day,
            'given_day' => $this->given_day            
        ];
    }
}
