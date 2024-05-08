<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function healthDestination()
    {
        return $this->belongsTo(HealthDestination::class);
    }

    public function touristDestination()
    {
        return $this->belongsTo(tourist_destination::class);
    }
}
