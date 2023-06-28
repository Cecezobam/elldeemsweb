@extends('layout')
@section('main-section')
    <div class="elldeems-inform">
        <div class="elldeems-details">

            <h1>ELLdeems admin Login</h1>
            <p class="message">
                {{session("message")}}

            </p>
          <form action="auth-admin" method="Post">
                @csrf
                <div class="form-group">
                    <label for="">Email </label>
                    <input name="admin-email" type="email" placeholder="Enter Your email address">
                </div>
                <div class="form-group">
                    <label for="">password</label>

                    <input id="password-field" name="admin-password" type="password">
                    <i class="fa fa-eye" id="show-password-btn"></i>
                </div>
                <div class="form-group form-button">
                    <input type="submit" value=Login>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById("show-password-btn").onclick=function(){
            let field=document.getElementById('password-field')
            if(field.type=="password"){
                field.type="text";   
            }
            else{
                field.type="password";
            }
        }
    </script>
    <style>
        body{
          background-color:goldenrod;
        }
      </style>
@endsection