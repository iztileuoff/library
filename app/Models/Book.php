<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    // many-to-many

    public function students()
    {
        return $this->belongsToMany(Student::class, 'histories');
    }
}
