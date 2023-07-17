<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'description' => 'required|min:10|max:1000',
            'image' => 'nullable|image|max:1024',
            'link' => 'required|url|max:200',
            'type_id' => 'required|exists:types,id',
            'stacks' => 'required|exists:stacks,id'
        ];
    }
}
