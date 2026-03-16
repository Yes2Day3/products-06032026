<a href='/products'>Products</a>
<form action='/update/{{ $product->id }}' method='post'>
    @csrf
    @method('PUT')
    <label for='name'>Product name: <label> <br>
    <input type='text' id='name' name='name' value='{{ $product->name }}'> <br>
    <label for='price'>Product price: <label> <br>
    <input type='text' id='price' name='price' value='{{ $product->price }}'> <br>
    <input type='submit'>
</form>