<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name'
    ];

    public $translatable = ['name', 'description'];

   public function toArray()
   {
       return [
           'id' => $this->id,
           'name' => $this->name,
           'created_at' => $this->created_at->timestamp
       ];
   }
}
