<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    //
    private $username ;

    public function __construct(Request $request){
     $this->username=$request->username;
    }
    public function show(){
       $user= User::where('username','=',$this->username)->first();
        //$user= User::where('username','=',auth()->user()->username)->first();
        //var_dump($user);
      //  die();
        $locations = $user->locations;
      //  var_dump($locations);

        return view('table')->with('userlocations',$locations);
    }
}
