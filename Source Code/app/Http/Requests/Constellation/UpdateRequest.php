<?php

namespace App\Http\Requests\Constellation;

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
            'name'=>'required|unique:constellations,name,'.$this->id,
            'definition'=>'required',
            'origin'=>'required',
            'meaning'=>'required',
            'symbolism'=>'required',
            'right_ascension'=>'required',
            'declination'=>'required',
            'area'=>'required',
            'main_stars'=>'required',
            'bordering_constellations'=>'required',
            'visible_at_latitudes'=>'required',
            'meteor_showers'=>'required'
        ];
    }
}
