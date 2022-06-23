@extends('layout')

@section('content')
<br><br>

<h1> Product details </h1>
<br><br>

<b>ID:</b>
{{ $data->id }} <br><br>

<b>Name:</b>
{{ $data->name }}<br><br>

<b>Price:</b>
{{ $data->price }}<br><br>

<b>Image:</b>
<img src="{{ asset("$data->image"); }}" width="100px"><br><br>

<b>Status:</b>
{{ $data->status }}<br><br>

@stop