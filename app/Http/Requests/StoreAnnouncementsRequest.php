<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use SebastianBergmann\Type\TrueType;

class StoreAnnouncementsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:10|max:255',
            'descreption'=>'required|string',
            'skills' => 'required|array',

            'companie_id'=>'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ];
    }
}
