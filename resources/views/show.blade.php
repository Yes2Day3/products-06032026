<a href="{{ route('index') }}">return</a>
<h1>{{ $product->name }}</h1>
<p>{{ $product->price }} €</p>
<a href="{{ route('edit', $product) }}">edit</a>
<form action="{{ route('delete', $product) }}" method='post'>
    @csrf
    @method('delete')
    <input type='submit' value='delete'>
</form>
<form action="{{ route('updateStatus', $product) }}" method='post'>
    @csrf
    @method('put')
    <label for='status'>Status: {{ $product->status }}</label> <br>
    <!-- <input type='text' value='{{ $product->status }}' id='status' name='status'> <br> -->
    <select id='status' name='status'>
        <option value=''>---------</option>
        <option value='In stock'>In stock</option>
        <option value='Out of stock'>Out of stock</option>
    </select> <br>
    <input type='submit'>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif