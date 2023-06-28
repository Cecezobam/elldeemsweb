<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GetController extends Controller
{
    //

    public function homeHandler(){
        return view('welcome');
    }
    public function aboutHandler(){
        return view('about');
    }
    public function contactHandler(){
        return view('contact');
    }
    public function  showListHandler(){
        $query="SELECT* FROM ContactTBL";
        return DB::select ($query);
    }
    public function EncryptPasswordHandler(){
        return Hash::make("jesusislord14");
    }

    public function galleryHandler(){
        return view('gallery');
    }
    public function LoginHandler(){
        return view('login');
    }
    public function LogoutHandler(){
        Auth::logout();
        return redirect('login')->with('message','you have logout');
    }
}
