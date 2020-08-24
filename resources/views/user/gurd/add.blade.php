@extends('dashboard')
@section('content')

<style media="screen">

.navbar{
  background-color: #48C9B0;
}
div#navbarNav {
    padding-left: 148px;
}

a.navbar-brand {
    padding-left: 112px;
}

div#navbarNav ul li a {
    color: #333;
    margin-right: 35px;
    font-weight: 700;
    text-transform: uppercase;
    transition:.3s;
}

div#navbarNav ul li a:hover {
  color: #fff;
  background: #333;
  border-radius: 4px;
}

 /*body area*/
 .title h2 {
   table-layout: ;
   text-align: center;
   padding-top: 40px;
   text-transform: uppercase;
   font-size: 43px;
   font-weight: 700;
   padding-bottom: 40px;
 }
 .from-area-1 input {
   width: 518px;
   height: 42px;
   border-radius: 6px;
   padding-left: 7px;
   margin-top: 10px;
   border: 1px solid #D5D8DC;
 }
 .from-area-2 input {
   width:518px;
   height:42px;
   border-radius:6px;
   padding-left:7px;
   margin-top:10px;
   border: 1px solid #D5D8DC;
 }

 .boxed-btn {
   margin-left:  465px;
   display: inline-block;
   font-size: 16px;
   background: chocolate;
   color: #fff;
   padding: 10px 50px;
   text-transform: uppercase;
   font-weight: 400;
   margin-top: 30px;
   margin-bottom: 30px;
   border-radius: 4px;
   transition: .3s;
 }
 .boxed-btn:hover{
   background: #1BD2B5;
   text-decoration: none;
   color: #fff;
 }

 .update-form {
   margin-bottom: 48px;
   display: block;
   text-align: center;
 }
 .update-form input {
   border: 1px solid #D5D8DC;
   border-radius: 4px;
   height: 40px;
   width: 444px;
   outline:none;
 }

 .search-btn {
   height: 40px;
   border-radius: 4px;
   border: none;
   width: 83px;
   display: inline-block;
   font-size: 16px;
   text-transform: uppercase;
   font-weight: 400;
   transition: .3s;
   background: chocolate;
 }
 .search-btn:hover{
   background: #1BD2B5 ;
   color: #fff;
   border: none;
   outline: none;
 }
 .update-area{
   background: #A4AD57;
 }
 .update-area h2 {
   text-align: center;
   padding-top: 40px;
   text-transform: uppercase;
   font-size: 43px;
   font-weight: 700;
   padding-bottom: 20px;
 }
 /*footer area*/
.footer-area {
  padding: 80px 0;
  background: #14adf3;
  height: 346px;
}
.links {
    padding-left: 98px;
}
.footer-area, .footer-area a {
  color: #fff;
}
.footer-wid h3 {
  text-transform: uppercase;
  margin-bottom: 10px;
  font-size: 25px;
}
.social-links a {
  font-size: 20px;
  padding-right: 30px;
  margin-top: 10px;
  display: inline-block;

}

.footer-wid ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

.footer-wid ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
.contact-info {
  position: relative;
  padding-left: 30px;
}
.contact-info i.fa {
  position: absolute;
  top: 3px;
  left: 0;
}
.footer-sub-form h3, h4 {
  text-transform: uppercase;
}
.footer-sub-form {
  margin-top: 30px;
  position: relative;
}
.footer-sub-form input[type=email] {
  border: none;
  color: #000;
  padding: 10px;
  width: 70%;
}
.footer-sub-form input[type="submit"] {
  color: #14adf3;
  background: #fff;
  border: none;
  padding: 10px;
  width: 27%;
  font-weight: 700;
  text-transform: uppercase;
}
.footer-sub-form form {
  margin-bottom: 10px;
}
.footer-sub-form p {
  font-size: 90%;
}
.copyright-area {
  background: #fff;
  padding: 0;
  margin: 0;
  height: 100px;
  font-size: 12px;
  height: 45px;
  padding-top: 22px;
}
.copyright-area li {
  display: inline-block;
  color: #000;
}
.copyright-area li:after {
  content: "|";
  padding-left: 10px;
  padding-right: 7px;
}
.copyright-area li:last-child:after {
  display: none;
}
.copyright-area {
  padding: 10px 0;
}

</style>
<!--start of body section-->
<div class="prisoner-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
           <h2>Add new guard</h2>
        </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="from-area-1">
          <form class="" action="{{url('gurd-store')}}" method="post">
            @csrf
              <input value="" name="fname" type="text" placeholder="First Name">
              <input value="" name="lname" type="text" placeholder="Last Name">
              <input value="" name="phone" type="text" placeholder="Phone">

        </div>
      </div>
      <div class="col-md-6">
        <div class="from-area-2">

            <input value="" name="date" type="date" placeholder="Date">
            <input value="" name="time" type="time" placeholder="Duty Time">
            <input value="" name="id" type="text" placeholder="ID">

        </div>
        <input class="btn btn-info mt-2" type="submit" name="btn" value="Submit">
        </form>
      </div>
    </div>

  </div>
</div>

<!--end of body section-->
<div class="update-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="update-title">
          <h2>Update guard info</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="update-form">
        <a class="btn btn-info" href="{{url('gurd-all')}}">All Gurd</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
