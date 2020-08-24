@extends('dashboard')
@section('content')
<br><br>
<table class="table table-striped container">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Crime</th>
      <th scope="col">Issu Date</th>
      <th scope="col">Relese Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all as $v_all)
    <tr>
      <th scope="row">{{$loop->index +1}}</th>
      <td>{{$v_all->name}}</td>
      <th scope="col">{{$v_all->crime_type}}</th>
      <td>{{$v_all->issue_date}}</td>
      <td>{{$v_all->release_date}}</td>
      <td><a class="btn btn-success" href="{{url('edit-prisonar/'.$v_all->id)}}">Edit</a>
          <a class="btn btn-info" href="{{url('view-prisoner/'.$v_all->id)}}">View</a>
          <a class="btn btn-danger" href="{{url('delete-prisoner/'.$v_all->id)}}">Delete</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br><br>

@endsection
