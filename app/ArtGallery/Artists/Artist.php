<?php

namespace App\ArtGallery\Artists;

use App\ArtGallery\Regions\Region;
use App\ArtGallery\ArtWorks\ArtWork;
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
        'bio',
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

    public function artWorks()
    {
        return $this->hasMany(ArtWork::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function getProfileImageUrlAttribute()
    {
        return'/storage/artists/'.$this->profile_image;
    }

}
 