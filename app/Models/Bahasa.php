<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bahasa extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function healthDestination(): BelongsToMany
    {
        return $this->belongsToMany(tourist_destination::class, 'bahasa_tourist_health_destination', 'health_destination_id', 'bahasa_id');
    }
    public function touristDestination(): BelongsToMany
    {
        return $this->belongsToMany(tourist_destination::class, 'bahasa_tourist_health_destination', 'tourist_destination_id', 'bahasa_id');
    }
}
