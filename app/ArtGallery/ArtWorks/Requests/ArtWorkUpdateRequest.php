<?php

namespace App\ArtGallery\ArtWorks\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ArtWorkUpdateRequest extends BaseFormRequest
{

          /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     public function rules()
     {
        return [
            'artist_id'=>'required|exists:artists,id',
            'title'=>'required|string',
            'size'=>'required|string',
            'art_work_medium_id'=>'required|exists:art_work_media,id',
            'art_work_material_id'=>'required|exists:art_work_materials,id',
            'price'=>'required',
            'currency'=>'required',
            'year'=>'required',
            'description'=>'required|string',
            'cover_photo'=>'file|mimes:jpg,png,jpeg,csv,jfif,pjpeg,pjp,gif',
            'images.*'=>'file|mimes:jpg,png,jpeg,csv,jfif,pjpeg,pjp,gif',
        ];
     }
}
