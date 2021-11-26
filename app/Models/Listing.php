<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Click;
use App\Models\User;
use App\Models\Tag;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // A listing has multiple clicks
    public function clicks() {
        return $this->hasMany(Click::class);
    }

    // A listing has only 1 user (inverse)
    public function user() {
        return $this->belongsTo(User::class);
    }

    // A Listing has multiple tags (many to many)
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
