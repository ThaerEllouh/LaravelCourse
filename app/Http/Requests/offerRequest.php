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
            
                'name_ar' => 'required|max:30|min:3|unique:offers,name_ar',
                'name_en' => 'required|max:30|min:3|unique:offers,name_en',
                'price' => 'required|numeric',
                'details_ar' => 'required',
                'details_en' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'name_ar.required'    => __('messages.oferr name required'),
            'name_ar.max'         => __('messages.oferr name max'),
            'name_ar.min'         => __('messages.oferr name min'),
            'name_ar.unique'      => __('messages.oferr name unique'),
            'name_en.required'    => __('messages.oferr name required'),
            'name_en.max'         => __('messages.oferr name max'),
            'name_en.min'         => __('messages.oferr name min'),
            'name_en.unique'      => __('messages.oferr name unique'),
            'price.required'      => __('messages.oferr price required'),
            'price.numeric'       => trans('messages.oferr price numeric'),
            'details_ar.required' => trans('messages.oferr details required'),
            'details_en.required' => trans('messages.oferr details required'),
        ];
    }
}
