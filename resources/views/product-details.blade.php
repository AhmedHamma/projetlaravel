<html>
<body>

{{--<h1> {{ $product->name }} </h1>--}}
{{--{{ $product->description }} <br>--}}
{{--{{ $product->price }} €<br>--}}
{{--<img src="{{ $product->picture }}" alt="{{ $product->name }}"/><br>--}}

@if (isset($product))
    <h1> {{ $product->name }} </h1>
    {{ $product->description }} <br>
    {{ $product->price }} €<br>
    <img src="{{ $product->picture }}" alt="{{ $product->name }}"/><br>

@else
  <p>t'es trop loin</p>
@endif


</body>
</html>
