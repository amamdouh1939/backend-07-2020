<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'price',
        'quantity',
        'category_id'
    ];

    public $translatedAttributes = ['name', 'description'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
