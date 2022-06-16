<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    /**
     * A card belongs to a pipeline
     */
    public function pipeline() {
        return $this->belongsTo(Pipeline::class);
    }
}
