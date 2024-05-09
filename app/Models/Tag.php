<?php

namespace App\Models;

use App\Models\Divide\Entry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function activities()
    {
        return $this->morphedByMany(Activity::class, 'taggable');
    }

    public function entries()
    {
        return $this->morphedByMany(Entry::class, 'taggable');
    }
}
