@extends('master_layout')

@section('content')
        <h1>Posts</h1>
        @if(Session::has("status"))
            <p>{{Session::get("status")}}</p>
        @endif

        <a href="{{url('tasks/create')}}"><button>New</button></a>
        <ul>
    	@foreach($tasks as $task)
            <li>
                <a href="tasks/{{$task->id}}"> {{$task->title}}</a>                 
                <a href="tasks/{{$task->id}}/edit"><button>Edit</button></a> 

                <form action="{{url('tasks/' . $task->id)}}" style="display:inline;" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <input type="submit" value="Delete"/>
                </form>

            </li>
            <hr>
        @endforeach
        </ul>
     </body>
</html>
@endsection