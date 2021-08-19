<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\Models\Offer;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;


class CrudController extends Controller
{
    use OfferTrait;
    
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

        //save photo in folder
        $img_name = $this -> saveImage($request -> photo, 'images/offers');


        //insert
        Offer::create([
            'name_ar'    => $request->name_ar,
            'name_en'    => $request->name_en,
            'price'      => $request->price,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
            'photo'      => $img_name,
        ]);

        return redirect()->back()->with(['success' => 'تم اضافة العرض بنجاح']);

    }

   
    public function getAllOffers(){
        $offers = Offer::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name', 'price', 'details_'.LaravelLocalization::getCurrentLocale().' as details') -> get();
        return view('offers/alloffers', compact('offers'));
    }

    public function editOffer($Offer_Id){

        // Offer::findOrFail($Offer_Id);
        
        $offer = Offer::find($Offer_Id); //search in given tabel only by id

        if(! $offer){
            return redirect()->back();
        }

        $offer = Offer::select('id','name_ar', 'name_en', 'details_ar', 'details_en', 'price') -> find($Offer_Id);

        return view('offers/edit', compact('offer'));

    }

    public function updateOffer(offerRequest $request, $offer_id){
        //validation request

        //check if offer is exist
        $offer = Offer::find($offer_id); //search in given tabel only by id

        if(! $offer){
            return redirect()->back();
        }

        //update data
        $offer -> update($request->all());
        return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

        
        //طريقة تانية 
        // $offer -> update([
        //     'name_ar'    => $request->name_ar,
        //     'name_en'    => $request->name_en,
        //     'price'      => $request->price,
        //     'details_ar' => $request->details_ar,
        //     'details_en' => $request->details_en,
        // ]);
        

    }
}
