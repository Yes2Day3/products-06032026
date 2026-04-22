<a href="{{ route('products.create') }}">Create product</a>
<ul>
    @foreach ($products as $product)
        <li>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->price }} €</p>
            <p>{{ $product->status }}</p>
            <a href="{{ route('view', $product) }}">view</a>
            <a href="{{ route('edit', $product) }}">edit</a>
            <form action="{{ route('delete', $product) }}" method='post'>
                @csrf
                @method('delete')
                <input type='submit' value='delete'>
            </form>
        </li>
    @endforeach
</ul>
<div class="p-6">{{ $products->links() }}</div>