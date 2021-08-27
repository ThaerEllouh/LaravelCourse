<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
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

}


