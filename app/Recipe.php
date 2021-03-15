<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'title', 'description', 'user_id',
        'healthy', 'time', 'difficulty_id',
    ];

    public function difficulty()
    {
        return $this->belongsTo(Difficulty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
