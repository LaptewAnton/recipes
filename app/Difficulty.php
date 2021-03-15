<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    protected $table = 'difficulties';

    protected $fillable = [
        'name'
    ];

    public function articles()
    {
        return $this->hasMany(Recipe::class);
    }
}
