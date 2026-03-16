<a href='/products'>return</a>
<h1>{{ $product->name }}</h1>
<p>{{ $product->price }} €</p>
<a href='/edit/{{$product->id}}'>edit</a>
<a href='/delete/{{$product->id}}'>delete</a>