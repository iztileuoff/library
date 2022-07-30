<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultet extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function groups()
    {
        return $this->hasMany(Group::class, 'facultet_id')->orderBy('created_at', 'DESC');
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, Group::class);
    }
}
