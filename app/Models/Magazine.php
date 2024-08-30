<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Magazine extends Model
{
    use HasFactory;
    protected $guarded  = ['id', 'created_at', 'updated_at'];
    protected $with     = ['cat'];

    /**
     * Get the category that owns the Magazine
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cat(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter (Builder $query, array $filters): void {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('edisi', 'like', '%' . $search . '%')
                      ->orWhereHas('cat', function ($query) use ($search) {
                        $query->where('slug', 'like', '%' . $search . '%');
                    });
            });
        });

        $query->when($filters['edisi'] ?? false, fn ($query, $cat) =>
            $query->whereHas('cat', fn ($query) =>
                $query->where('slug', $cat))
        );

        // $query->when($filters['author'] ?? false, fn ($query, $author) =>
        //     $query->whereHas('author', fn ($query) =>
        //         $query->where('username', $author))
        // );
    }
}
