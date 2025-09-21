<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_id',
        'game_name',
        'image',
        'released_date',
        'genre',
        'description'
    ];

    // Um jogo pertence a um estúdio
    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
}