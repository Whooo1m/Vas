<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = ['category_pkey'];
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id','id');

    }
}
