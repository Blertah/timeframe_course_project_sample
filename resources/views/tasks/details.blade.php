@extends('master_layout')

@section('content')


    <h1>{{$task->title}}</h1>
    <p>{{$task->created_at->diffForHumans()}}</p>
    {{$task->description}}
    <hr>
    <h3>Comments:</h3>


    <form method="POST" action="{{url("tasks/" . $task->id . "/comments")}}">
      {{ csrf_field() }}
        <textarea name="comment"></textarea>
        <br>
        <button type="submit">Add</button>
    </form>


    @forelse($task->comments()->orderBy('id','DESC')->get() as $comment)
    	<p>{{$comment->created_at->diffForHumans()}}: {{$comment->content}}</p>
    @empty
    	<p>There is no comment for this post</p>
    @endforelse
@endsection