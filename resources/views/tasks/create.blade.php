<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
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
     </body>
</html>
