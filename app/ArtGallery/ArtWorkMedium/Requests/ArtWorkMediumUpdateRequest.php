<?php

namespace App\ArtGallery\ArtWorkMedium\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class ArtWorkMediumUpdateRequest extends BaseFormRequest
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
