<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="{{asset('font/index.css')}}">
   <title>PMS | Welcome to PMS</title>
</head>
<body>
 <!--Navbar-->
  <nav class="navbar   navbar-dark navbar-expand-md  ">
    <a class="navbar-brand" href="{{url('/')}}"><span id="brand2">PMS<i class="fa fa-police"></i></span></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ml-5 ">
        <li class="nav-item "><a class="nav-link active" href="{{url('/')}}">Home</a></li>
        <li class="nav-item ml-2"><a class="nav-link" href="{{url('prisoner-add')}}">Prisoner info</a></li>
        <li class="nav-item ml-2"><a class="nav-link" href="{{url('gurd-add')}}">Guard info</a></li>
        <li class="nav-item ml-2"><a class="nav-link" href="{{url('register-user')}}">New Register</a></li>
         <li class="nav-item ml-2"><a class="nav-link" href="{{url('visitor-add')}}">Visitor info</a></li>
         @if(Auth::check())
        <div class="btn-group">
          <a type="button" class="nav-link text-dark font-weight-bold dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
          </div>
        </div>
         @else
          <li class="nav-item ml-2"><a class="nav-link" href="{{url('logout')}}">Logout</a></li>
         @endif
     </ul>
    </div>
  </nav>
<!--END OF NAVBAR-->
  <div class="">
    @yield('content')
  </div>
 <!-- footer-->
 <div class="footer-area">
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="footer-wid">
           <h3>PMS</h3>
           <p>Prison Management system is an application to automate the process for maintaining and tracking the day to day activities of any prison.The Portal’s Major responsibility is to take care of the proper maintenance of any prison.</p>
         </div>
         <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
          </div>
       </div>
       <div class="col-md-4 links" >
         <div class="footer-wid">
         <h3>Quick Links</h3>
        <ul>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('presoner-all')}}">Prisoner info</a></li>
          <li><a href="{{url('gurd-all')}}">Guard info</a></li>
          <li><a href="{{url('all-visitor')}}">Visitor info</a></li>
          </ul>
       </div>
       </div>
       <div class="col-md-4">
         <div class="footer-wid">
         <p class="contact-info"><i class="fa fa-map-marker"></i>Asulia, Savar <br> Dhaka, Bangladesh</p>
          <p class="contact-info"><i class="fa fa-envelope"></i><a href="mailto:omorsfaruk@gmail.com">omorsfaruk@gmail.com</a></p>
          <p class="contact-info"><i class="fa fa-phone"></i><a href="tell:8801764758976">+8801764758976</a></p>
          </div>
       </div>
     </div>
   </div>
 </div>
 <div class="copyright-area">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <p>Copyright © 2020 All right reserved by PMS | This Site is made with ♥ by <a href=" ">PMS</a> </p>
       </div>
       <div class="col-md-6 text-right">
         <ul>
           <li><a href="#">Privacy Policy</a></li>
           <li><a href="#">Terms of conditions</a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
