@extends('dashboard')
@section('content')

  <section class="container">
    <div class="">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">phone</th>
      <th scope="col">date</th>
      <th scope="col">time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_gurd as $v_all)
    <tr>
      <th scope="row">{{$loop->index +1}}</th>
      <td>{{$v_all->fname}}</td>
      <td>{{$v_all->phone}}</td>
      <td>{{$v_all->date}}</td>
      <td>{{$v_all->time}}</td>
      <td>
        <a class="btn btn-info" href="{{url('edit/'.$v_all->id)}}">edit</a>
        <a class="btn btn-danger" href="{{url('delete/'.$v_all->id)}}">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </section>

@endsection
