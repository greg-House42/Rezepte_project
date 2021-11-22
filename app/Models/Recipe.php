<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ["description", "titel", "ingredients", "file_path", "created_at", "updated_at"];

    public function images()
    {
        return $this->hasMany(File::class, 'recipe_id', 'id');
    }
}
