<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">les données suivantes ont bien été ajoutées</h2>
    </div>
    <div class="panel-body">
        <h3>titre</h3>
        <p>{{ $products['name'] }}</p>

        <h3>Descritpion</h3>
        <p>{{ $products['description'] }}</p>

        <h3>prix</h3>
        <p>{{ $products['price'] }}</p>

        <h3>image</h3>
        <p><img height="180" src="{{ $products['image'] }}"></p>

        <h3>poids</h3>
        <p>{{ $products['weight'] }}</p>

        <h3>quantité</h3>
        <p>{{ $products['quantity'] }}</p>
    </div>
</div>
