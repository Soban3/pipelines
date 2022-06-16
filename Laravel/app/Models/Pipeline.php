<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pipeline extends Model
{
    use HasFactory;

    /**
     * A pipeline has many cards
     */
    public function cards() {
        return $this->hasMany(Card::class);
    }
}
