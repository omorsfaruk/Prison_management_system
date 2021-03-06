@extends('dashboard')
@section('content')

<style media="screen">
@import url('https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i&display=swap');
body{
  font-family: 'Noto Serif', serif;
}
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

.section-padding {
 padding: 60px 0;
}
 /*body area*/

 .section-heading {
  text-align: center;
  margin-bottom: 50px;
  line-height: 3px;
  font-size: 20px;
}
.section-heading h2 {
  font-size: 50px;
  font-weight: 700;
  text-style: uppercase;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.fa.fa-envelope-open {
  font-size: 240px;
  text-align: center;
  margin-top: 100px;
  margin-left: 40px;
  color: #7d3c98;
}
.contact-form {
  margin-top: 60px;
}
.form-group input {
  border-radius: 50px;

}
placeholder {
  padding: 40px;
  font-size: 30px;
}
.send-message {
  color: #333;
  border: 1px solid #ddd;
  border-radius: 40px;
  padding: 10px;
  font-size: 16px;
  font-weight: 400;
  transition: .3s;
  background: #7d3c98;
    color: #fff;
}
.send-message:hover{
  text-decoration: none;
  background:transparent;
  color: #7d3c98;
  border:1px solid #7d3c98;
}
.contact-form {
  margin-bottom: 30px;
}
.form-group input {
  border-radius: 50px;
  height: 50px;
}
#message {
  border-radius: 40px;
  height: 100px;
  padding: 15px;
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
<!--Contact-->
 <div class="section-padding">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="section-heading">
           <h2>have some question?</h2>
           <p><i class="fa fa-map-marker"></i> Keranigang, Dhaka</p>
           <p><i class="fa fa-envelope"></i> contact@pms.com</p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6">
         <i class="fa fa-envelope-open"></i>
       </div>
       <div class="col-md-6">
         <form class="contact-form" action="{{url('store-contatc')}}" method="post">
           @csrf
           <div class="form-group">
               <input class="form-control"type="text" name="fname" value="" placeholder="First Name">
           </div>
           <div class="form-group">
             <input class="form-control"type="text" name="lname" value="" placeholder="Last Name">
           </div>
           <div class="form-group">
               <input class="form-control"type="email" name="email" value="" placeholder="What's your email:">
           </div>
           <div class="form-group">
              <textarea name="comment" class="form-control" id="comment" placeholder="Your question..." rows="" ></textarea>
            </div>

            <input type="submit" class="send-message" name="btn-contacr" value="SEND MESSAGE">

         </form>

       </div>
     </div>
   </div>
 </div>

<!--end of body section-->
@endsection                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
