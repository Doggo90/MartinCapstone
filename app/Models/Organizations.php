<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Organizations extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
