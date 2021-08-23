<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\Models\Offer;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class OfferController extends Controller
{
    use OfferTrait;
    public function create(){
        //view form to add this offer
        return view('ajaxoffers.create');
    }

    public function store(offerRequest $request){
        //save offer in to DB using Ajax
        $img_name = $this -> saveImage($request -> photo, 'images/offers');

        //insert
        $offer = Offer::create([
            'name_ar'    => $request->name_ar,
            'name_en'    => $request->name_en,
            'price'      => $request->price,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
            'photo'      => $img_name,
        ]);

        if($offer)
        return response() -> json([
            'status' => true,
            'msg'  => 'تم الحفظ بنجاح ',
        ]);

        else
        return response() -> json([
            'status' => false,
            'msg'  => 'فشل الحفظ اعد المحاولة مرة اخرى',
        ]);
    }

    public function all(){
        
         $offers = Offer::select('id', 'name_'.LaravelLocalization::getCurrentLocale().' as name', 'price', 'photo', 'details_'.LaravelLocalization::getCurrentLocale().' as details')->limit(5) -> get(); //return collection
        
        return view('ajaxoffers.all', compact('offers'));
    }

    public function delete(Request $request){

        
        $offer = Offer::where('id', $request->id)->first(); 


        $offer-> delete();

        if($offer)
        return response() -> json([
            'status' => true,
            'msg'  => 'تم الحفظ بنجاح ',
            'id' => $request->id,
        ]);

    }


    public function edit(Request $request){

        $offer = Offer::find($request -> offer_id); //search in given tabel only by id

        if(! $offer){
            return response() -> json([
                'status' => false,
                'msg'  => 'هذا العرض غير موجود',
            ]);
        }

        $offer = Offer::select('id','name_ar', 'name_en', 'details_ar', 'details_en', 'price') -> find($request -> offer_id);

        return view('ajaxoffers/edit', compact('offer'));

    }

    public function update(offerRequest $request){

        //validation request

        //check if offer is exist
        $offer = Offer::find($request -> offer_id); //search in given tabel only by id

        if(! $offer){
            if(! $offer){
                return response() -> json([
                    'status' => false,
                    'msg'  => 'هذا العرض غير موجود',
                ]);
            }
        }

        //update data
        $offer -> update($request->all());
        return response() -> json([
            'status' => true,
            'msg'  => 'تم التحديث بنجاح ',
        ]);

    }
 


}
