<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepassRequest extends FormRequest
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
            'newpassword' =>'required|min:6|max:24',
            'confirmnewpassword'=>'required|same:newpassword'
        ];
    }
}
