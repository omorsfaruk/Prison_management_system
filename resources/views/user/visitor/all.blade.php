@extends('dashboard')
@section('content')
<br><br>
<table class="table table-striped container">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Prisonar Name</th>
      <th scope="col">Prisonar relative</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_visitor as $v_visitor)
    <tr>
      <th>{{$loop->index +1}}</th>
      <td>{{$v_visitor->name}}</td>
      <th >{{$v_visitor->prisonar->name}}</th>
      <td>{{$v_visitor->relative}}</td>
      <td>{{$v_visitor->par_location}}</td>
      <td><a class="btn btn-success" href="{{url('edit-visitor/'.$v_visitor->id)}}">Edit</a>
          <a class="btn btn-info" href="{{url('view-visitor/'.$v_visitor->id)}}">View</a>
          <a class="btn btn-danger" href="{{url('visitor-delete/'.$v_visitor->id)}}">Delete</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br><br>

@endsection
