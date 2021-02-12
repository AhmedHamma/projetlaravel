@extends('backoffice.backoffice')
@section('content')
    <h1> Supprimer un article </h1>
    @foreach ($product as $prod)
                        <br>
                        <h2> {{ $prod->name }} </h2>
                        <h2> {{ $prod->price }} €</h2>
        <form action="/backoffice/suppr/{{$prod->id}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary btn-primary:hover align-txt">Delete</button>
        </form>
    @endforeach
@endsection
