<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedBook extends Model
{
    use HasFactory;

    protected $table = 'issuedbooks';

    protected $fillable = ['issued_at', 'expected_return_date', 'book_id', 'member_id', 'librarian_id'];

    protected $casts = [
        'expected_return_date' => 'datetime',
        'issued_at' => 'datetime',
    ];

    function member()
    {
        return $this->belongsTo(Member::class);
    }

    function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function librarian()
    {
        return $this->belongsTo(Librarian::class);
    }

    public function fine()
    {
        return $this->hasOne(Fine::class);
    }
}
