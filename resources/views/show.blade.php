<a href="{{ route('index') }}">return</a>
<h1>{{ $product->name }}</h1>
<p>{{ $product->price }} €</p>
<a href="{{ route('edit', $product) }}">edit</a>
<form action="{{ route('delete', $product) }}" method='post'>
    @csrf
    @method('delete')
    <input type='submit' value='delete'>
</form>