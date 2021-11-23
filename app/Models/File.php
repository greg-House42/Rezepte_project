<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class File extends Model
{
    use HasFactory;
    protected $fillable = ["name", "extension", "file_path", "created_at", "updated_at"];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }

    public function setExtension($value)
    {
        $this->attributes['extension'] = strtolower($value);
    }

    /*public function recipe()
    {

        return $this->hasManyThrough(

            Recipe::class,

            'id', // Foreign key on recipes table...

            'id' // Local key on files table...

        );
    }*/
}
