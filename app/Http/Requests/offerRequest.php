<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class offerRequest extends FormRequest
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
            
                'name' => 'required|max:10|min:3|unique:offers,name',
                'price' => 'required|numeric',
                'details' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => __('messages.oferr name required'),
            'name.max'         => __('messages.oferr name max'),
            'name.min'         => __('messages.oferr name min'),
            'name.unique'      => __('messages.oferr name unique'),
            'price.required'   => __('messages.oferr price required'),
            'price.numeric'    => trans('messages.oferr price numeric'),
            'details.required' => trans('messages.oferr details required'),
        ];
    }
}
