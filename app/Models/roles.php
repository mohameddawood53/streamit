<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class roles extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ["role"];

    protected $table = "roles";


    protected $fillable = ["role"];
    public function users(){
        return $this->hasMany(User::class);
    }
}
