<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['insulation','description'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
