<?php

namespace App\ArtGallery\Users\Requests;

use App\ArtGallery\Base\BaseFormRequest;

class AddToCartRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //add your rules here
        ];
    }
}