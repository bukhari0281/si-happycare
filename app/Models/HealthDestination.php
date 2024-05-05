<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HealthDestination extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function faskesKategori()
    {
        return $this->belongsTo(FaskesKategori::class);
    }
    public function Language()
    {
        return $this->hasMany(Language::class);
    }
    public function Layanan()
    {
        return $this->hasMany(Service::class);
    }
}
