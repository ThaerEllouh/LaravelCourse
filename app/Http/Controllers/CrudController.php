<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function getOffers(){
        return Offer::select('id', 'name', 'price') -> get();
    }

    //الدرس 46
    // public function store(){
    //     Offer::create([
    //         'name'    => 'offer6',
    //         'price'   => '520',

    //     ]);
    // }

    //الدرس 47

    public function create(){
        return view('offers/create');
    }

    // protected function getRoles(){
    //     return $rules = [
    //         'name' => 'required|max:10|min:3|unique:offers,name',
    //         'price' => 'required|numeric',
    //         'details' => 'required',
    //     ];
    // }

    // protected function getMsg(){
    //     return $messages = [
    //         'name.required'    => __('messages.oferr name required'),
    //         'name.max'         => __('messages.oferr name max'),
    //         'name.min'         => __('messages.oferr name min'),
    //         'name.unique'      => __('messages.oferr name unique'),
    //         'price.required'   => __('messages.oferr price required'),
    //         'price.numeric'    => trans('messages.oferr price numeric'),
    //         'details.required' => trans('messages.oferr details required'),
    //     ];
    // }

    public function store(offerRequest $request){

        //validate data befor insert to DB

        // $rules = $this->getRoles();
        // $messages = $this->getMsg();

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if($validator -> fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($request->all());
        // }

        //insert
        Offer::create([
            'name'    => $request->name,
            'price'   => $request->price,
            'details' => $request->details,
        ]);

        return redirect()->back()->with(['success' => 'تم اضافة العرض بنجاح']);

    }
}
