<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>backoffice</title>
</head>
<body>
<h1>back office</h1>
<p>bvn bg</p>
@foreach ($products as $product)
    <br>
    <h2> {{ $product->name }} </h2>
    <h2> {{ $product->price }} €</h2>
    <a href="/backoffice/product/modif/{{ $product->id }}"><button class="btn btn-primary">Modifier</button></a>
    <a href="/backoffice/product/suppr/{{ $product->id }}"><button class="btn btn-primary">Supprimer</button></a>
    <br>
@endforeach
<p><a href="/backoffice/ajout">aller vers la page d'<strong>ajout</strong></a></p>
<p><a href="/backoffice/modif">aller vers la page de <strong> modification</strong></a></p>
<p><a href="/backoffice/suppr">aller vers la page de <strong> suppression</strong></a></p>
<p><a href="/backoffice">retour a la page <strong> Backoffice</strong></a></p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
@yield('content')
{{-- content --}}

</body>
</html>
