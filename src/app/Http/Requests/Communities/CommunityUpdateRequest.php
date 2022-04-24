<?php

namespace App\Http\Requests\Communities;

use Illuminate\Foundation\Http\FormRequest;

class CommunityUpdateRequest extends FormRequest
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
        return [
            "club_name" => "required|string",
            "club_leader" => "required|string|max:50",
            "image" => "mimes:jpg,jpeg,png,svg,gif",
            "establishment_date" => "required|date",
            "category" => "required|in:motor,mobil,mobility",
            "socmed.email" => "required|email"
        ];
    }
}
