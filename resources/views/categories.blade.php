<x-layout>
    <h2> Categories </h2>

    @foreach ($categories as $category)
        <p>{{ $category->name }}</p>
    @endforeach

    <br>

    <a href="{{ 'categories/create' }}">
        <button type="button">Add New Category</button>
    </a>
</x-layout>
