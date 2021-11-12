<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class File extends Model
{
    use HasFactory;
    protected $fillable = ["file_path", "created_at", "updated_at"];

    public function recipe(): HasMany
    {
        return $this->hasMany(Recipe::class);
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
