<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [];

    public function souscategory(): HasMany
    {
        return $this->hasMany(SousCategory::class);
    }
}
