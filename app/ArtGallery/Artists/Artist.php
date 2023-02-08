<?php

namespace App\ArtGallery\Artists;

use App\ArtGallery\Regions\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\ArtGallery\ArtistTypes\ArtistType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_type_id',
        'region_id',
        'name',
        'profile_image',
        'social_url'
    ];

    public function artistType()
    {
        return $this->belongsTo(ArtistType::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function profileImage():Attribute
    {
        return Attribute::make(
            get:fn($value) => Storage::disk('public')->url('images/artists/'.$value)
        );
    }
}
 