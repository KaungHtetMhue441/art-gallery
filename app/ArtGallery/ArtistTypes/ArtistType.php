<?php

namespace App\ArtGallery\ArtistTypes;

use App\ArtGallery\Artists\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtistType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function artists()
    {
        return $this->hasMany(Artist::class);
    }
}
