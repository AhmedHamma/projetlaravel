<html>
<body>
{{--<h1> {{ $products->name }} </h1>--}}
<?php
foreach ($products as $prod) { ?>
<h1> {{ $prod->name }} </h1>
{{ $prod->description }} <br>
{{ $prod->price }} €<br>
<img class="img-article" src="{{ $prod->image }}" alt="{{ $prod->name }}"/><br>
<?php };    ?>

</body>
</html>
