<?php

namespace App\Http\Requests\Observatory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'observatory_name' => 'required|unique:observatories,observatory_name,'.$this->id,
            'location' => 'required',
            'category' => 'required',
            'establish' => 'required',
            'overview' => 'required'
        ];
    }
}
