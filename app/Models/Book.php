<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'published'
    ];

    public function author()
    {
        return $this->hasManyThrough('Author', 'BookAuthor',
            'book_id', 'id',
            'id', 'author_id');
    }
}
