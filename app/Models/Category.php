<?php

namespace App\Models;

use App\Models\Magazine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * Get all of the comments for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function magazines(): HasMany
    {
        return $this->hasMany(Magazine::class, 'cat_id');
    }
}
