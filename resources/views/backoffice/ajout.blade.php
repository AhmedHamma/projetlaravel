@extends('backoffice.backoffice')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter un article</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/backoffice/result" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname">Nom</label>
                    <input type="text" class="form-control" name="name" placeholder="nom de l'article">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">prix</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" placeholder="entrez ici l'url de l'image">
                </div>
                <div class="form-group">
                    <label for="weight">Poids</label>
                    <input type="number" class="form-control" name="weight" placeholder="poids arrondis au kg">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantité</label>
                    <input type="number" class="form-control" name="quantity" placeholder="stock">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
