<?php

namespace App\ArtGallery\Exhibitions\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ExhibitionUpdateRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'=>'required',
            'title_mm'=>'string|required',
            'title_en'=>'string|required',
            'description_mm'=>'string|required',
            'description_en'=>'string|required',
            'exhibition_date'=>'required',
            'exhibition_start_time'=>'required',
            'cover_photo'=>'file|mimes:jpg,png,jpeg,csv,jfif,pjpeg,pjp,gif',
        ];
    }
}
