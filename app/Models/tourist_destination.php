<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tourist_destination extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function bahasa()
    {
        return $this->belongsToMany(Bahasa::class, 'bahasa_tourist_health_destination', 'tourist_destination_id', 'bahasa_id');
    }

    public function wisataKategori()
    {
        return $this->belongsTo(WisataKategori::class);
    }


    public function kontak()
    {
        return $this->hasOne(Contact::class);
    }
}
