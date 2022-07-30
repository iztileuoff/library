<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    // many-to-many

    public function books()
    {
        return $this->belongsToMany(Book::class, 'histories');
    }
}
