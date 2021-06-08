<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $tag = $this->route()->parameter('tag');

        $rules = [
            'name'      => 'required',
            'slug'      => 'required|unique:tags',
            'color'     => 'required'/* ,
            'file'      => 'image' */
        ];

        if($tag) {
            $rules['slug'] = 'required|unique:tags,slug,' . $tag->id;
        }

        return $rules;
    }
}
