<x-layout>

    <h1>Create Categories</h1>

    <form action="/categories/create" method="POST">
        @csrf

        <div>
            <label for="name">Category Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <br>

        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
        </div>

        <br>

        <button type="submit">Save Category</button>
    </form>

</x-layout>
