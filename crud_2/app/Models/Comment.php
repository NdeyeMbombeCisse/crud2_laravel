<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'contenu',
        'auteur',
        'date_heure_creation',
        'articles_id',
    ];


    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
