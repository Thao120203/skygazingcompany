<?php

namespace App\Http\Requests\SolarSystem;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'solar_system_name' => 'required|unique:ss',
            'overview' => 'required',
            'when_discovered' => 'required',
            'image' => 'required|image',
            'atmosphere' => 'required',
            'namesake' => 'required',
            'potential_for_life' => 'required',
            'size_and_distance' => 'required',
            'orbit_and_rotation' => 'required',
            'moons' => 'required',
            'rings' => 'required',
            'formation' => 'required',
            'structure' => 'required',
            'magnetosphere' => 'required',
            'surface' => 'required'
        ];
    }
}
