<?php

namespace App\Models;

use Database\Seeders\TouristDestinationSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function healthDestination()
    {
        return $this->belongsTo(HealthDestination::class);
    }

    public function touristDestination()
    {
        return $this->belongsTo(tourist_destination::class);
    }
}
