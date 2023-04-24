<?php

namespace App\ArtGallery\ArtWorkCategories\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ArtWorkCategoryCreateRequest extends BaseFormRequest
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
