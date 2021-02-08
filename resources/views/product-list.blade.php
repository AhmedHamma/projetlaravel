@extends("app")

@section("head")
    @parent
    <link rel="stylesheet" href="{{asset("/css/catalogue.css")}}">
@endsection

@section("page-title","Catalogue")

@section("content")
<div class="list-product">
    <div class="item">
        <div class="flex-zone">
            <div class="item-image">
                <img src="./images/bento-1.svg" alt="">
            </div>
            <div class="item-container">
                <h2>Lorem Ipsum</h2>

                <?php
<<<<<<< HEAD
                foreach ($product as $prod) { ?>
=======
                foreach ($products as $prod) { ?>
>>>>>>> 35004dc2fc05199db0afc248176383a58844b8f2
                <h1> {{ $prod->name }} </h1>
                {{ $prod->description }} <br>
                {{ $prod->price }} €<br>
                <img class="img-article" src="{{ $prod->picture }}" alt="{{ $prod->name }}"/><br>
                <?php };    ?>
                <div class="note">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <button class="btn-primary">Découvrir</button>
            </div>
        </div>
    </div>

    <div class="item">
        <div class="flex-zone">
            <div class="item-image">
                <img src="./images/bento-1.svg" alt="">
            </div>
            <div class="item-container">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="note">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <button class="btn-primary">Découvrir</button>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="flex-zone">
            <div class="item-image">
                <img src="./images/bento-1.svg" alt="">
            </div>
            <div class="item-container">
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consghtgdhdghhgectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="note">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <button class="btn-primary">Découvrir</button>
            </div>
        </div>
    </div>
</div>

@endsection


@section("footer")
    @parent
@endsection

