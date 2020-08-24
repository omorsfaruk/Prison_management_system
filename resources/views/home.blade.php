@extends('dashboard')
@section('content')


<!--carousel slider-->
 <section class="bg-dark" id="showcase">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-slide-to="0" data-target="#myCarousel" class="active" ></li>
       <li data-slide-to="1" data-target="#myCarousel" ></li>
       <li data-slide-to="2" data-target="#myCarousel" ></li>
     </ol>
     <div class="carousel-inner">
       <div class="carousel-item carousel-img-1 active">
         <img src="{{asset('images/image1.jpeg')}}" alt="Image-1">
         <div class="container">
           <div class="carousel-caption   ">
             <h2 class="cap1">Wellcome to Prison Management System.</h2>
           </div>
         </div>
       </div>
       <div class="carousel-item carousel-img-2 ">
          <img src="{{asset('images/image2.jpg')}}" alt="Image-2">
         <div class="container">
           <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5 text-right">
             <h2  >Wellcome to Prison Management System.</h2>
           </div>
         </div>
       </div>
       <div class="carousel-item carousel-img-3 ">
          <img src="{{asset('images/image3.jpg')}}" alt="Image-3">
         <div class="container">
           <div class="carousel-caption mb-5 pb-5 text-left">
            <h2 >Wellcome to Prison Management System.</h2>
          </div>
         </div>
       </div>
     </div>
     <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
       <span class="carousel-control-prev-icon"></span>
     </a>
     <a class="carousel-control-next" href="#myCarousel" data-slide="next">
       <span class="carousel-control-next-icon"></span>
     </a>
   </div>
 </section>
<!--end of carousel slider-->
<!--start of body section-->
<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="IGP">Message from IGP </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="images/bengir.jpg" alt="">
      </div>
      <div class="col-md-6">
        <div class="article">
            <p>I am immensely pleased to heartily welcome all to the webpage of Bangladesh police.
            Originally created to serve the interests of the colonial authority of the far past, Bangladesh Police, now imbued with the spirit of freedom and independence, has come through a paradigm shift and become the symbol of rule of law. The dawn of this new journey was our great war of liberation when, in response to the clarion call of Bangabandhu, father of the nation, the undaunted members of this force chose to be the vanguards of a life-staking armed resistance against the brutal aggression to our beloved motherland. Since then we have been changing everyday in every ways and today policing here is pro-people, proactive, community-oriented, technology based and sensitized to issues regarding human rights, gender and children. Particularly, in the last four and a half years Bangladesh police has undergone radical changes in terms of professional amelioration, capacity building and service delivery, thanks to the personal and initiatives of the Honorable prime Minister in this regard.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="IGP2">Message from AIG</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="article2">
            <p>I am immensely pleased to heartily welcome all to the webpage of Bangladesh police.
            Originally created to serve the interests of the colonial authority of the far past, Bangladesh Police, now imbued with the spirit of freedom and independence, has come through a paradigm shift and become the symbol of rule of law. The dawn of this new journey was our great war of liberation when, in response to the clarion call of Bangabandhu, father of the nation, the undaunted members of this force chose to be the vanguards of a life-staking armed resistance against the brutal aggression to our beloved motherland. Since then we have been changing everyday in every ways and today policing here is pro-people, proactive, community-oriented, technology based and sensitized to issues regarding human rights, gender and children. Particularly, in the last four and a half years Bangladesh police has undergone radical changes in terms of professional amelioration, capacity building and service delivery, thanks to the personal and initiatives of the Honorable prime Minister in this regard.</p>
        </div>
      </div>
      <div class="col-md-6">
           <img  class="bangir"src="images/bangir.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<!--end of body section-->

@endsection
