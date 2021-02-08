<html>
<body>
<<<<<<< HEAD
<h1> {{ $product->name }} </h1>
{{ $product->description }} <br>
{{ $product->price }} €<br>
<img src="{{ $product->picture }}" alt="{{ $product->name }}"/><br>
=======
@if (isset($product))
    <h1> {{ $product->name }} </h1>
    {{ $product->description }} <br>
    {{ $product->price }} €<br>
    <img src="{{ $product->picture }}" alt="{{ $product->name }}"/><br>

@else
  <p>t'es trop loin bg</p>
@endif

>>>>>>> 35004dc2fc05199db0afc248176383a58844b8f2
</body>
</html>
