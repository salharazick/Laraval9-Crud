@extends('layout')

@section('content')

<br><br>
 
<h1>Edit product </h1>
<br><br>

<div class="col-sm-5">

<form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
@csrf 
  <div class="form-group">

  <input type="hidden" name="id" value="{{ $data['id'] }}">

    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ $data['name'] }}" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label>price </label>
    <input type="float" name="price" class="form-control" value="{{ $data['price'] }}" placeholder="Enter price">
  </div>

  <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" id="image" class="form-control" placeholder="image">
                    <img src="{{ asset("$data->image"); }}" width="100px">
                </div>


  <div class="form-group">
    <label>status: </label>
  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-inline" name="optradio" value="on">Active 
    <input type="radio" class="form-check-inline" name="optradio" value="off">Inactive
  </label>
</div>
  <br><br>
  <button type="submit" class="btn btn-primary">update</button>
</form>

</div>

@stop