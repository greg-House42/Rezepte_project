<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ["description", "titel", "ingredients", "file_path", "created_at", "updated_at"];

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(File::class, 'recipe_id', 'id');
    }


    public function setExtension($value)
    {
        $this->attributes['extension'] = strtolower($value);
    }

    public function getExtension($value)
    {
        return ucfirst($value);
    }

}
