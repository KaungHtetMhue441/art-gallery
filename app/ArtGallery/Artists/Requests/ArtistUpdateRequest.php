<?php

namespace App\ArtGallery\Artists\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ArtistUpdateRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'artist_type_id'=>'required|integer',
            'region_id'=>'required|integer',
            'profile_image'=>'file|mimes:jpg,png,jpeg,csv,jfif,pjpeg,pjp,gif',
            'social_url'=>'required|url',
            'bio'=>'required|string'
        ];
    }
}