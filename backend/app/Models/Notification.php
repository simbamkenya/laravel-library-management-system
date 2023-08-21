<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'fine_id'];

    public function fine()
    {
        return $this->belongsTo(Fine::class);
    }
}
