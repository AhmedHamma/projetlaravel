@extends('backoffice.backoffice')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">modifier un article</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/backoffice/modif/{{$product['id']}}" method="POST">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname">Nom</label>
                    <input type="text" class="form-control" name="name" placeholder="nom du comics" value="{{$product['name']}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" value="{{$product['description']}}" ></textarea>
                </div>
                <div class="form-group">
                    <label for="price">prix</label>
                    <input type="number" class="form-control" name="price" value="{{$product['price']}}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" placeholder="entrez ici l'url de l'image" value="{{$product['picture']}}">
                </div>
                <div class="form-group">
                    <label for="weight">Poids</label>
                    <input type="number" class="form-control" name="weight" placeholder="poids arrondis au kg" value="{{$product['weight']}}">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantité</label>
                    <input type="number" class="form-control" name="quantity" placeholder="stock" value="{{$product['quantity']}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection

