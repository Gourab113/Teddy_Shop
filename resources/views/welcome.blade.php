<x-layout>

    <h1> Welcome {{ $name }} </h1>

    <h2> Products </h2>

    @foreach ($products as $product)
        <p>This is product {{ $product['id'] }}</p>
        <p>Product Name: {{ $product['name'] }} </p>
    @endforeach


</x-layout>
