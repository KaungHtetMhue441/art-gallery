<?php

namespace App\ArtGallery\Artists\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ArtistCreateRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'string|required',
            'artist_type_id'=>'integer|required',
            'region_id'=>'integer|required',
            'profile_image'=>'file|mimes:jpg,png,jpeg,csv,jfif,pjpeg,pjp,gif',
            'social_url'=>'required|url',
        ];
    }
}
