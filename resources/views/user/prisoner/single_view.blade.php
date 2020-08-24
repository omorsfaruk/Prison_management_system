@extends('dashboard')
@section('content')

    <section class="container ">
      <div class="">
        <span><strong>Name:</strong> {{$single->name}}</span><br>
        <span><strong>Present Location:</strong> {{$single->pre_location}}</span><br>
        <span><strong>parmanet location:</strong> {{$single->par_location}}</span><br>
        <span><strong>Gender:</strong> {{$single->gender}}</span><br>
        <span><strong>Age:</strong> {{$single->age}}</span><br>
        <span><strong>Education:</strong> {{$single->education}}</span><br>
        <span><strong>Nationality:</strong> {{$single->Nationality}}</span><br>
        <span><strong>Issue Date:</strong> {{$single->issue_date}}</span><br>
        <span><strong>Crime:</strong> {{$single->crime_type}}</span><br>
        <span><strong>Relese Date:</strong> {{$single->release_date}}</span><br>
        <span><strong>Crime Spot:</strong> {{$single->crime_spot}}</span><br>
        <span><strong>Image:</strong> <img src="{{asset($single->photo)}}" height="80px" width="80px;" alt=""> </span><br>
      </div><br>
      <a class="btn btn-info" href="{{url('relese/'.$single->id)}}">Relese</a>
    </section>
<br><br>
@endsection
