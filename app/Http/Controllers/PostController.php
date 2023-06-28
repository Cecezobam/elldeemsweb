<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function ContactPostHandler(){
        return"contact successfully";
    }
   
    public function sendContactPostHandler(){
        $name  =Request ::input('name');
        $address=Request::input('address');
        $phone=Request::input('phone');
        $email=Request::input('email');
        $comment=Request::input('comment');

        $record=array($name,$address,$phone,$email,$comment);
        $query="INSERT INTO contactTBL(customer_name,customer_address,customer_phone,customer_email,customer_comment) VALUES (?,?,?,?,?)";
        DB::insert($query,$record);
        return redirect("contact")->with("message","Contact Sucessfull");
    }
    public function AuthAdminHandler(){

        $login_id=Request::input("admin-email");
        $login_secret=Request::input("admin-password");

        $record=[
            "email"=>$login_id,
            "password"=>$login_secret,
        ];
        if(Auth::attempt($record)){
            return redirect('/');
        
        }else{
            return redirect("/login")->with("message","password or incorrect email");
        
        }
    }


}