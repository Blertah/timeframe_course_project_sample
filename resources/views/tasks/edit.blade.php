@extends('master_layout')

@section('content')
    @include("errors")
    <form method="POST" action="{{url('tasks/' . $task->id)}}">
      {{ csrf_field() }}
      <input type="hidden" value="PUT" name="_method"/>
        <label>Title</label><br>
        <input name="title" value="{{$task->title}}" type="text"></input>
        <br>
        <label>Description</label><br>
        <textarea name="description">{{$task->description}}</textarea>
        <br>
        <button type="submit">Save</button>
    </form>
@endsection