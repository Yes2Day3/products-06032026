<a href='/products'>Products</a>
<form action='/store' method='post'>
    @csrf
    <label for='name'>Product name: <label> <br>
    <input type='text' id='name' name='name'> <br>
    <label for='price'>Product price: <label> <br>
    <input type='text' id='price' name='price'> <br>
    <input type='submit'>
</form>