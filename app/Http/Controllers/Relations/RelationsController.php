<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Phone;
use App\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    public function hasOneRelation(){
        $user = User::with(['phone' => function($q){
            $q -> select('code', 'phone', 'user_id');
        }]) -> find(5);
        // return $user;
        // return $user -> name;
        return $user -> email;
        // return $user -> phone -> code;
        // return $user -> phone -> phone;
        //return response()->json($user);
        //return $user -> phone;
    }

    public function hasOneRelationReverse() {

    $phone = Phone::with(['user' => function($qq){
        $qq -> select('id','name');
    }]) -> find(1);

    //make some attribute visible 
    // $phone -> makeVisible(['user_id']);
    // $phone -> makeHidden(['code', 'phone']);
    // return $phone;

    //return user of this phone
    //return $phone -> user;    

    //get all data phone & user
    // return $phone;
    // return $phone -> code;
    // return $phone -> user -> age;
    return $phone;

    }

    public function getUserHasPhone(){
        // $user =  User::whereHas('phone') -> get();

        $user =  User::whereHas('phone', function($q){
            $q -> where('code', '972');
        }) -> get();
        return $user;

    }
    
    public function getUserHasNotPhone(){
        $user =  User::whereDoesntHave('phone') -> get();
        return $user;

    }


    ############ Start One To Many Relation #############

    public function getHospitalDoctors(){

        //return hospital doctors only
        // $hospital = Hospital::find(1);
        // return $hospital -> doctors;  

            ##############################

        //return hospital & doctors
        $hospital = Hospital::with('doctors') -> find(1);
        // return $hospital;

        //return hospital data
        // return $hospital -> name;
        // return $hospital -> address;

        //return doctors data
        $doctors = $hospital -> doctors;
        // foreach($doctors as $doctor){
        //     echo $doctor -> name . "<br>";
        // }

        // foreach($doctors as $doctor){
        //     echo $doctor -> title  . "<br>";
        // }

        foreach($doctors as $doctor){
            echo $doctor -> name . ' : ' . $doctor -> title . "<br>";
        }

            
            ##############################

        //invers relation
        
        $doctor = Doctor::with(['hospital' =>  function($q){
            $q -> select('name', 'id');
        }]) -> find(5);

        $doctor -> hospital -> makeHidden(['id']);
        $doctor -> makeVisible(['created_at']);
        // return $doctor -> hospital;
        // $doctor -> hospital;
        return $doctor;

    }




    public function getAllHospital(){
        $hospitals = Hospital::select('id', 'name', 'address') -> get();
        return view('mydoctors.hospitals', compact('hospitals'));
    }

    public function getAllDoctors($hospital_id){
        $hospital = Hospital::with('doctors') -> find($hospital_id);
        $doctors =  $hospital -> doctors;
        return view('mydoctors.doctors', compact('doctors'));
    }

    //الدرس 79

    //مستشفيات بها اطباء
    public function getHospitalExistDoctor(){
        $hospitals1 = Hospital::whereHas('doctors') -> get();
        return view('mydoctors.hospitals', compact('hospitals1'));
    }

    //مستشفيات لا يوجد بها اطباء
    public function getHospitalNotExistDoctor(){
        $hospitals2 = Hospital::whereDoesntHave('doctors') -> get();
        return view('mydoctors.hospitals', compact('hospitals2'));
    }

    //مسشفيات تحتوى اطباء ذكور 
    public function getHospitalExistDoctorMale(){
        $hospitals3 = Hospital::whereHas('doctors', function($q){
            $q -> where('gender', '0');
        }) -> get();
        return view('mydoctors.hospitals', compact('hospitals3'));
    }

    //مسشفيات تحتوى اطباء اناث 
    public function getHospitalExistDoctorFemale(){
        $hospitals4 = Hospital::whereHas('doctors', function($q){
            $q -> where('gender', '1');
        }) -> get();
        return view('mydoctors.hospitals', compact('hospitals4'));
    }

    

    //الدرس 80 حذف المشفى بكل دكاترته 
    public function deleteHospital($hospital_id){

        $hospital = Hospital::find($hospital_id);

        if(! $hospital)
            return abort('404');

        $hospital -> doctors() -> delete();
        $hospital -> delete();

        return redirect() -> back();

    }

    
}


