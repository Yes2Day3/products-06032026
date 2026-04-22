<ul>
@foreach($cars as $car)
<li>
    <h1>{{ $car->name }}</h1>
    <p>{{ $car->year }}</p>
    <p>{{ $car->totalDistance }}</p>
</li>
@endforeach
</ul>