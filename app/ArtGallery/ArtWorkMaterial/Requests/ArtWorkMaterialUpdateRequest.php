<?php

namespace App\ArtGallery\ArtWorkMaterial\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ArtWorkMaterialUpdateRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
