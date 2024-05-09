<?php

namespace App\Models\Divide;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
