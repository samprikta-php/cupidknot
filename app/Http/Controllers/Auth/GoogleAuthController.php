<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
     public function index(){

        return view('auth.google-auth');

     }


     public function googleRedirect(){
        return Socialite::driver('google')->redirect();
        
     }

     public function googleCallback(){
        $user = Socialite::driver('google')->user();
        dd($user);
    }
     
    private function createOrUpdateUser($data,$provider){

        $user=User::where('email',$data->email)->first();
        if($user){
            $user->update(['provider'=>$provider,
            $user->
        ]);

        }

    }



}
