<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{

    protected $fillable = [
        'title',
    ];

    public function songs(): HasMany
    {
        return $this->hasMany(Song::class);
    }

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
