<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    function attributes(): HasMany
    {
        return $this->hasMany(ProductAttribute::class);
    }

    protected function makeAllSearchableUsing(Builder $query): Builder
    {
        return $query->with('title');
    }
}
