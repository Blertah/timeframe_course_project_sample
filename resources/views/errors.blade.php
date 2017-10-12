@if(count($errors->all()))
    U paraqitet gabimet e me poshtem:
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif