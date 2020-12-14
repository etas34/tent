<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /**
     * Get the comments for the blog post.
     */
    public function type()
    {
        return $this->hasMany(Type::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
