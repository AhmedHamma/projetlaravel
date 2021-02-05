<html>
<body>
@if (isset($product))
    <h1> {{ $product->name }} </h1>
    {{ $product->description }} <br>
    {{ $product->price }} €<br>
    <img src="{{ $product->picture }}" alt="{{ $product->name }}"/><br>

@else
  <p>t'es trop loin bg</p>
@endif

</body>
</html>
