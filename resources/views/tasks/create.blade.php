@extends('master_layout')


@section('content')

<form method="POST" action="{{action('TaskController@store')}}">
  {{ csrf_field() }}
    <label>Title</label><br>
    <input name="title" type="text"></input>
    <br>
    <label>Description</label><br>
    <textarea name="description"></textarea>
    <br>
    <button type="submit">Save</button>
</form>
@endsection