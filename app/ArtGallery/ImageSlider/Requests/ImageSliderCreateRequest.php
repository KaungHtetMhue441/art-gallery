<?php

namespace App\ArtGallery\ImageSlider\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ImageSliderCreateRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required'
        ];
    }
}
