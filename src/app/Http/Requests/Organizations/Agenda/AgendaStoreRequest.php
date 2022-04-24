<?php

namespace App\Http\Requests\Organizations\Agenda;

use Illuminate\Foundation\Http\FormRequest;

class AgendaStoreRequest extends FormRequest
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
            "type" => "required|string|in:activity,info",
            "name" => "required|string",
            "date" => "required|date",
            "description" => "required|string"
        ];
    }
}
