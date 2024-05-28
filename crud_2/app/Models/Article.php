<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'desc',
        'date_creation',
        'a_la_une',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
