<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Applications extends Model
{
    use HasFactory;

    public function agency(): HasMany
    {
        return $this->hasMany(Agency::class);
    }
}
