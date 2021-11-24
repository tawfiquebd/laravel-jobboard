<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Listing;

class Click extends Model
{
    use HasFactory;

    protected $guarded = [];

    // A click has 1 listing (inverse)
    public function listing() {
        return $this->belongsTo(Listing::class);
    }
}
