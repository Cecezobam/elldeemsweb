 @extends('layout')
 @section('main-section')

 <section class="sample1">
  <h1> SOME BOTTLE SAMPLES </h1>
</section>

 <div class="swiper">
    <section class="second-pictures swiper-wrapper">
        {{-- <img class="swiper-slide" src="images/img60ml.jpg" alt=""> --}}
        <img class="swiper-slide"  src="images/img300.jpg" alt="">
        <img class="swiper-slide"  src="images/imgd.jpg" alt="">  
        <img  class="swiper-slide" src="images/image30.jpg" alt="">
        <img  class="swiper-slide" src="images/imgme.jpg" alt=""> 
        <img  class="swiper-slide" src="images/img400.jpg" alt=""> 
        <img  class="swiper-slide" src="images/image-color30.jpg" alt="">
        
    </section> 
</div>
<section class="pictures">
        <img src="images/image30.jpg" alt="">
        <img src="images/image15.jpg" alt="">
        <img src="images/image50.jpg" alt="">
        <img src="images/image51.jpg" alt="">
        <img src="images/thirtyml.jpg" alt="">
        <img src="images/img400.jpg" alt="">
        <img src="images/img60ml.jpg" alt="">
        
        
        
</section>


  
  
    </div>  

<div class="video-source">
    <video src="images/candy.mp4" controls></video>
    <video src="images/colorsml.mp4" controls></video>
</div>
<div class="for-gallery">
  <a href="contact">Click</a>
</div>
<style>
  body{
    background-color:goldenrod
  }
</style>
@endsection