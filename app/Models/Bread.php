<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bread extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'brand',
        'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
