<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Listing;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    // A Tag has multiple Listings (many to many)
    public function listings() {
        return $this->belongsToMany(Listing::class);
    }
}
