<html>
<body>
<h1> {{ $product->name }} </h1>
{{ $product->description }} <br>
{{ $product->price }} €<br>
<img src="{{ $product->picture }}" alt="{{ $product->name }}"/><br>
</body>
</html>
