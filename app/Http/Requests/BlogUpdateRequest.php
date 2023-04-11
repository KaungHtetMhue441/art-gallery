<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id'=>'required',
            'blog_category_id'=>'required|integer',
            'title_mm'=>'required|string',
            'title_en'=>'required|string',
            'description_mm'=>'required|string',
            'description_en'=>'required|string',
        ];
    }
}
