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

{{--                @php()--}}

{{--                --}}{{-- content --}}
{{--                @foreach ($product as $prod)--}}
{{--                    <br>--}}
{{--                    <h2> {{ $prod->name }} </h2>--}}
{{--                    <h2> {{ $prod->price }} €</h2>--}}
{{--                    <a href="/backoffice/product/modify/{{ $prod->id }}"><button class="btn btn-primary">Modifier</button></a>--}}
{{--                    <a href="/backoffice/product/delete/{{ $prod->id }}"><button class="btn btn-primary">Supprimer</button></a>--}}
{{--                    <br>--}}
{{--                @endforeach--}}
{{--@endphp--}}
{{--                <h1> liste des produits </h1>--}}
{{--                @foreach ($products as $prod)--}}
{{--                    <p>{{$prod->name}}--}}
{{--                        @if($prod->category)--}}
{{--                            qui est un produit {{$prod->category->name}}</p>--}}
{{--                    @endif--}}
{{--                    <p><img height="180" src="{{$prod->picture}}" alt="img"></p>--}}
{{--                    <p>{{$prod->price}}€</p>--}}
{{--                @endforeach--}}
                @foreach($categories as $category)
                    @if($category->products)
                        <h1>dans la catégorie {{$category->name}} nous avons :</h1>
                        @foreach($category->products as $prod)
                            <p>{{$prod->name}}</p>
                            <p><img height="180" src="{{$prod->picture}}" alt="image"> pour {{$prod->price}} €</p>
                        @endforeach
                    @endif
                @endforeach
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

