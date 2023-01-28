<?php

namespace App\ArtGallery\Regions;

use App\ArtGallery\Artists\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function artists(){
        return $this->hasMany(Artist::class);
    }
}
