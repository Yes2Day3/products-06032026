<a href='/products/create'>Create product</a>
<ul>
    @foreach ($products as $product)
        <li>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->price }} €</p>
            <a href='/view/{{ $product->id }}'>view</a>
            <a href='/edit/{{$product->id}}'>edit</a>
            <a href='/delete/{{$product->id}}'>delete</a>
        </li>
    @endforeach
</ul>