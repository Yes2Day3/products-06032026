<a href='/products'>Products</a>
<form action=" {{ route('update', $product) }} " method='post'>
    @csrf
    @method('PUT')
    <label for='name'>Product name: <label> <br>
    <input type='text' id='name' name='name' value="{{ old('name') }}"> <br>
    <label for='price'>Product price: <label> <br>
    <input type='text' id='price' name='price' value="{{ old('price') }}"> <br>
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