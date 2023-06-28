@extends('layout')
@section('main-section')
<div class="ella-brand">
<div class="brand">
    <img src="images/elldeems.png" alt="">
</div>
</div>

    <div class="elldeems-inform">
        <div class="elldeems-details">
            
            {{-- @if(Auth::user()) --}}
            <a href="show-contact-list">See all contacts</a>
            {{-- @else --}}
            <section class="hi">
                <h1>CONTACT ELLDEEMS BOTTLES</h1>
            </section>
            <p class="message">
                     {{session("message")}}
            </p>
            {{-- @endif --}}
            
            <form action="send-contact"method="post">
                @csrf
                
                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" type="text">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input name="address" type="text">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input name="phone" type="text">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" type="text">
                </div>
                <div class="form-group">
                    <label for="">How may we help you</label>
                    <textarea name="comment" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group form-button">
                    <input type="submit"required autocomplete="off" value="Send Information">
                </div>
            </form>
        </div>
    </div>
    <style>
        body{
             background-color: #eaaa06;
        }
    </style>
@endsection 