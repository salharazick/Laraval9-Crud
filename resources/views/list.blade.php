@extends('layout')

@section('content')

<br><br>

<h1> product list </h1><br><br>

<h2> Hi {{session('user')}} </h2>
<br>

@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('status')}}

<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times; </span>
</button>
</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">status</th>

      <th>operations</th>

    </tr>
  </thead>
  <tbody>

  @foreach($data as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td><img src="{{ asset("$item->image"); }}" width="100px"></td>
      <td>{{$item->status}}</td>

      <td>
      <a href={{"delete/".$item['id']}} button type="clear" class="btn btn-danger">Delete</a> 
      <a href={{"edit/".$item['id']}} button type="edit" class="btn btn-primary">Edit</a>  
      <a href={{"view/".$item['id']}} button type="view" class="btn btn-warning">View</a> 
      </td>

    @endforeach


  </tbody>
</table>


@stop