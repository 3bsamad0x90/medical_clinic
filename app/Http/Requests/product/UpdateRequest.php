<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_ar' => 'required',
            'title_en' => 'required',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];
    }
    public function messages()
    {
        return [
            'title_ar.required' => 'الإسم بالعربية مطلوب',
            'title_en.required' => 'الإسم بالانجليزية مطلوب',
            'description_ar.required' => 'الوصف بالعربية مطلوب',
            'description_en.required' => 'الوصف بالانجليزية مطلوب',
            'image.image' => 'الصورة يجب ان تكون صورة',
            'image.mimes' => 'الصورة يجب ان تكون من نوع jpeg,png,jpg,gif',
        ];
    }
}
