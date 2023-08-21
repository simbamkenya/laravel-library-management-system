<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;


class Book extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['isbn', 'title', 'description', 'category_id', 'author_id', 'publication_date', 'publisher_id'];

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function publishers()
    {
        return $this->belongsTo(Publisher::class);
    }
    public function issued_book()
    {
        return $this->hasOne(IssuedBook::class);
    }
}
