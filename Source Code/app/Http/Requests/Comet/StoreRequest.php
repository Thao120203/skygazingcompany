<?php

namespace App\Http\Requests\Comet;

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
            'introduction' =>'required',
            'where_do_comets_come_from' =>'required',
            'exploration_of_comets'=>'required',
            'how_comets_get_their_name'=>'required'
        ];
    }

}
