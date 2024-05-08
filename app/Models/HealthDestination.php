<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthDestination extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function faskesKategori()
    {
        return $this->belongsTo(FaskesKategori::class);
    }
    public function bahasa()
    {
        return $this->belongsToMany(Bahasa::class, 'bahasa_tourist_health_destination', 'health_destination_id', 'bahasa_id');
    }
    public function Layanan()
    {
        return $this->hasMany(Service::class);
    }

    public function Kontak()
    {
        return $this->hasOne(Contact::class);
    }
}
