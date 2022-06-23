@extends('layout')

@section('content')
<br><br>

<h1> Add Product </h1><br><br>

<div class="col-sm-5">
<div class="container">
<form action="add" method="POST" enctype="multipart/form-data">
@csrf 
  
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter product name">
  </div>

  

  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" placeholder="Enter price">
  </div>

  <div class="form-group">
    <label>Upload Image:</label><br>
    <input type="file" name="image" id="image">
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
@stop