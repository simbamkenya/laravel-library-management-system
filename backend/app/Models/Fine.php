<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasFactory;
    protected $fillable = ['amount', 'paid_at', 'issuedBook_id'];

    protected $cast = [
        'paid_at' => 'datetime'
    ];

    public function issuedbook()
    {
        return $this->belongsTo(IssuedBook::class);
    }
    public function notification()
    {
        return $this->hasOne(Notification::class);
    }
}
