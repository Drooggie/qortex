<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Album extends Model
{

    protected $guarded = [];

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class)->withPivot('track_number');
    }

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
