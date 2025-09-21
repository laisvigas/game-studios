<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_name',
        'logo',
    ];

    // Um estúdio tem muitos jogos
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}