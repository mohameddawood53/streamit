<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ["name"];

    protected $guarded = [];



    public function child()
    {
        return $this->hasMany(Category::class , "parent_id");
    }

    public function parent()
    {
        return $this->belongsTo(Category::class , "parent_id" , "id");
    }
}
