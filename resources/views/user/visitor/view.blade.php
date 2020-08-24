@extends('dashboard')
@section('content')
<br><br>
    <section class="container ">
      <div class="">
        <span><strong>Name:</strong> {{$view->name}}</span><br>
        <span><strong>Present Location:</strong> {{$view->location}}</span><br>
        <span><strong>parmanet location:</strong> {{$view->par_location}}</span><br>
        <span><strong>Gender:</strong> {{$view->gender}}</span><br>
        <span><strong>Prisionar Name:</strong> {{$view->prisonar->name}}</span><br>
        <span><strong>Relesion with prisonar:</strong> {{$view->relative}}</span><br>
        <span><strong>phone:</strong> {{$view->phone}}</span><br>
        <span><strong>time:</strong> {{$view->time}}</span><br>
    </section>
<br><br>
@endsection
