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

    protected $casts = [
        "social_url"=>"array"
    ];

    public function artistType()
    {
        return $this->belongsTo(ArtistType::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function getProfileImageUrlAttribute()
    {
        return Storage::disk('public')->url('/artists/'.$this->profile_image);
    }

    public function socialUrl():Attribute
    {
        return Attribute::make(
            set:fn($value) => json_encode(explode(',',trim($value))),
            get:fn($value) => json_decode($value)
        );
    }
}
 